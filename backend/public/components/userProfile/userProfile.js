//make order history visible
const orderHistoryBtn = document.getElementById("order-history-btn");
const historyContainer = document.getElementById("orderHistoryContainer");

orderHistoryBtn.addEventListener("click", function () {
    if (
        historyContainer.style.display === "none" ||
        historyContainer.style.display == ""
    ) {
        historyContainer.style.display = "block";
    } else {
        historyContainer.style.display = "none";
    }
});

//make wish list visible
const wishListBtn = document.getElementById("wish-list-btn");
const wishListContainer = document.getElementById("wishListContainer");

wishListBtn.addEventListener("click", function () {
    if (
        wishListContainer.style.display === "none" ||
        wishListContainer.style.display == ""
    ) {
        wishListContainer.style.display = "block";
    } else {
        wishListContainer.style.display = "none";
    }
});

//log-out handling
const logoutButton = document.getElementById("log-out-btn");

logoutButton.addEventListener("click", function () {
    localStorage.removeItem("armyshop_currently_signed_in_user");
    window.location.href = "/";
    console.log("User logged-out");
});

window.addEventListener("load", function () {
    //redirect if user is not logged in
    data = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );
    if (data === null) {
        createPopup();
        displayLoginMenu();
    } else document.querySelector("body").removeAttribute("hidden");

    //load user data into fields
    if (data.email) document.getElementById("email").value = data.email;

    if (data.phone) document.getElementById("phone").value = data.phone;

    nameInput = document.getElementById("name");
    if (data.first_name) nameInput.value = data.first_name + " ";
    if (data.last_name)
        nameInput.value =
            (nameInput.value == null ? "" : nameInput.value) + data.last_name;

    if (data.address) {
        addressFields = data.address.split(",");
        document.getElementById("address").value = addressFields[0];
        document.getElementById("zip-code").value = addressFields[1];
        document.getElementById("city").value = addressFields[2];
        document.getElementById("country").value = addressFields[3];
    }
});

//save changes
const saveChangesButton = document.getElementById("save-changes-btn");

saveChangesButton.addEventListener("click", async function () {
    oldData = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );

    //add validation
    //

    address =
        document.getElementById("address").value +
        "," +
        document.getElementById("zip-code").value +
        "," +
        document.getElementById("city").value +
        "," +
        document.getElementById("country").value;

    data = {
        email: document.getElementById("email").value,
        first_name: document.getElementById("name").value.split(" ")[0],
        last_name: document.getElementById("name").value.split(" ")[1],
        age: null,
        address: address,
        license_picture: null,
    };

    console.log(data);
    localStorage.setItem(
        "armyshop_currently_signed_in_user",
        JSON.stringify(data)
    );

    alert("Changes saved.");
});
