//make order history visible
const orderHistoryBtn = document.getElementById("order-history-btn");
const historyContainer = document.getElementById("orderHistoryContainer");

orderHistoryBtn.addEventListener("click", async function () {
    if (
        historyContainer.style.display === "none" ||
        historyContainer.style.display == ""
    ) {
        historyContainer.style.display = "block";
        let orders = await ServerRequester.getFromUrl(`/finished_orders/${JSON.parse(localStorage.getItem('armyshop_currently_signed_in_user')).id}`);
        
        console.log(orders.finishedOrders);
        if (orders.finishedOrders.length == 0) {
            let html = `<table>
                            <tr>
                                <td>You have no orders yet.</td>
                            </tr>
                        </table>`;
            historyContainer.innerHTML = html;
        }
        else {
            let html = `<table>
                            <tr>
                            <th>ID:</th>
                            <th>Items:</th>
                            <th>Price:</th>
                            </tr>`;

            for (const [id, order] of Object.entries(orders.finishedOrders)) {
                html += `
                    <tr>
                        <td>#${id}</td>
                        <td>${Object.keys(order.ordered_products).length}</td>
                        <td>${Formatter.formatPriceMillions(order.price)} €</td>
                    </tr>
                `;
            }

            html += "</table>";
            historyContainer.innerHTML = html;
        }

    } else {
        historyContainer.style.display = "none";
    }
});

//make wish list visible
const wishListBtn = document.getElementById("wish-list-btn");
const wishListContainer = document.getElementById("wishListContainer");

wishListBtn.addEventListener("click", async function () {
    if (
        wishListContainer.style.display === "none" ||
        wishListContainer.style.display == ""
    ) {
        wishListContainer.style.display = "block";
        // Build the HTML string for the wishlist
        let wishlistHTML = "<table>";

        const likedIds = await getLikedProducts();
        const productsToDisplay = GlobalVariables.products.filter((product) =>
            likedIds.includes(product.id)
        );
        if (productsToDisplay.length == 0) {
            wishlistHTML += "<tr><td>Your wishlist is empty.</td></tr>";
        }

        productsToDisplay.forEach((product) => {
            wishlistHTML += `
                <tr class="wishListRow">
                <td>
                    <img class="productImg" src="${
                        product.image_url.split(" ")[0]
                    }" width="80px" height="50px">
                </td>
                <td>${product.name}</td>
                <td class="wishListPrice">${formatPriceMillions(
                    product.price
                )}</td>
                </tr>
            `;
        });

        wishlistHTML += "</table>";

        wishListContainer.innerHTML = wishlistHTML;
    } else {
        wishListContainer.style.display = "none";
    }
});

function formatPriceMillions(price) {
    if (price > 1000000) {
        price = (price / 1000000).toFixed(2) + "M";
    } else if (price > 100000) {
        price = (price / 1000).toFixed(2) + "K";
    }
    price = price.toString().replace(".", ",");
    return price;
}

//log-out handling
const logoutButton = document.getElementById("log-out-btn");

logoutButton.addEventListener("click", function () {
    localStorage.removeItem("armyshop_currently_signed_in_user");
    localStorage.removeItem("cart");
    localStorage.removeItem("buyNowCart");
    window.location.href = "/";
    console.log("User logged-out");
});

window.addEventListener("load", function () {
    //redirect if user is not logged in
    data = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );
    if (data === null) {
        window.location.href = "/";
    } else document.querySelector("body").removeAttribute("hidden");

    //load user data into fields
    if (data.phone)
        document.getElementById("telephone-input").value = data.phone;

    const firstNameInput = document.getElementById("first-name-input");
    const lastNameInput = document.getElementById("last-name-input");
    if (data.first_name) firstNameInput.value = data.first_name;
    if (data.last_name) lastNameInput.value = data.last_name;

    if (data.address) {
        addressFields = data.address.split(",");
        document.getElementById("address-input").value =
            addressFields[0] == "undefined" ? "" : addressFields[0];
        document.getElementById("zip-input").value =
            addressFields[1] == "undefined" ? "" : addressFields[1];
        document.getElementById("city-input").value =
            addressFields[2] == "undefined" ? "" : addressFields[2];
        document.getElementById("country-input").value =
            addressFields[3] == "undefined" ? "" : addressFields[3];
    }

    setMilitaryPassport();
});

//save changes
const saveChangesButton = document.getElementById("save-changes-btn");

saveChangesButton.addEventListener("click", async function () {
    const inputElements = {
        firstName: document.getElementById("first-name-input"),
        lastName: document.getElementById("last-name-input"),
        address: document.getElementById("address-input"),
        zip: document.getElementById("zip-input"),
        city: document.getElementById("city-input"),
        country: document.getElementById("country-input"),
        phone: document.getElementById("telephone-input"),
    };

    let oldData = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );

    if (!UserProfileValidator.areAllInputsValid(inputElements)) {
        return;
    }

    let address =
        inputElements.address.value +
        "," +
        inputElements.zip.value +
        "," +
        inputElements.city.value +
        "," +
        inputElements.country.value;

    let data = {
        id: oldData.id,
        first_name: inputElements.firstName.value,
        last_name: inputElements.lastName.value,
        address: address,
        phone: inputElements.phone.value,
    };

    fetch(`/api/users/update/${data.id}`, {
        method: "PUT",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
    })
        .then((response) => response.json())
        .then((data) => console.log(data))
        .catch((error) => console.error(error));


    data.role = oldData.role;
    data.is_license_valid = oldData.is_license_valid;
    data.license_picture = oldData.license_picture;
    localStorage.setItem(
        "armyshop_currently_signed_in_user",
        JSON.stringify(data)
    );

    alert("Changes saved.");
});

async function getLikedProducts() {
    data = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );
    if (data === null || data.id < 1) {
        alert("You must be logged in to view your wishlist.");
        return;
    }
    const response = await ServerRequester.getFromUrl(
        `/liked_products/${data.id}`
    );
    if (response.status === 200) {
        likedArray = response.products.map((product) => product.product_id);
    } else {
        likedArray = [];
    }
    console.log(likedArray);
    return likedArray;
}

async function setMilitaryPassport() {
    let user = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );

    if (!user || !user.license_picture) {
        return;
    }

    document.querySelector("#profile-military-passport-image").src =
        user.license_picture;
}

let collapsibleElement = document.getElementsByClassName("collapsible")[0];
collapsibleElement.addEventListener("click", function () {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
        content.style.display = "none";
    } else {
        content.style.display = "block";
    }
});

async function submitMilitaryPassport() {
    const user = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );

    const response = await ServerRequester.postToUrl(
        `/users/${user.id}/update_military_passport`,
        {
            license_picture: sessionStorage.getItem("military-passport"),
        }
    );

    if (response.status === 200) {
        alert("Military passport successfully submitted!");
        user.license_picture = sessionStorage.getItem("military-passport");
        localStorage.setItem(
            "armyshop_currently_signed_in_user",
            JSON.stringify(user)
        );
        setMilitaryPassport();
    }
}

militaryPassportChoosen = async (event) => {
    const [file] = event.files;
    if (!file) {
        imageToSubmit = null;
        return;
    }

    const reader = new FileReader();
    reader.readAsDataURL(file);

    reader.addEventListener("load", () => {
        sessionStorage.setItem("military-passport", reader.result);
    });

    await delay(200);

    document.querySelector("#profile-military-passport-image").src =
        sessionStorage.getItem("military-passport");

    const submitButton = document.createElement("button");
    submitButton.type = "button";
    submitButton.classList.add("btn", "btn-primary");
    submitButton.innerText = "Submit";
    submitButton.addEventListener("click", () => {
        submitMilitaryPassport();
    });

    document
        .querySelector("#military-passport-container .btn.btn-primary")
        ?.remove();
    document
        .querySelector("#military-passport-container")
        .appendChild(submitButton);
};
