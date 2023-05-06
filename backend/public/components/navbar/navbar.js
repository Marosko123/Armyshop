const onSearchInputChanged = async (event) => {
    const searchString = event.target.value.replace(" ", "+");
    if (searchString.length < 3) {
        document.getElementById("search-results-wrapper").innerHTML = "";
        return;
    }

    const listOfProducts = await ServerRequester.getFromUrl(
        "/products/search?q=" + searchString
    );

    if (listOfProducts.status !== 200) {
        return;
    }

    const searchResult = createListOfResults(
        listOfProducts.products,
        searchString
    );

    document.getElementById("search-results-wrapper").innerHTML = searchResult;
};

const onLogoClicked = () => {
    window.location.href = "/";
};

const onShoppingCartClicked = () => {
    window.location.href = "/shoppingCart";
};

const createPopup = () => {
    const popup = document.createElement("div");
    popup.id = "login-popup";

    const popupContent = document.createElement("div");
    popupContent.classList.add("login-popup-content");

    popup.appendChild(popupContent);

    document.querySelector("body").appendChild(popup);
};

const displayLoginMenu = () => {
    loginRegisterMenu = document.querySelector("#login-register-menu-wrapper");
    loginRegisterMenu.style.display = "block";
    document.querySelector("#login-register-menu-wrapper").remove();
    document
        .querySelector(".login-popup-content")
        .appendChild(loginRegisterMenu);
};

const onProfileClicked = () => {
    if (localStorage.getItem("armyshop_currently_signed_in_user") === null) {
        createPopup();
        displayLoginMenu();
    } else {
        window.location.href = "/profile";
    }
};

window.addEventListener("load", async function () {
    const response = await ServerRequester.getFromUrl("/products");

    if (response.status !== 200) {
        return;
    }

    GlobalVariables.products = response.products;

    user = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );

    if (user != null) {
        const profileButton = document.querySelector(".profile__button");
        profileButton.style.backgroundColor = "gold";

        if (user.role == "admin") {
            document
                .querySelectorAll(".search-input-wrapper")
                .forEach(function (elem) {
                    var button = document.createElement("button");
                    button.setAttribute(
                        "class",
                        "button admin-dashboard__button"
                    );
                    button.innerHTML =
                        '<img class="navbar-img" src="https://www.svgrepo.com/show/102270/cogwheel-outline.svg" alt="Responsive image">';

                    button.addEventListener("click", function () {
                        window.location.href = "/adminDashboard";
                    });

                    elem.insertAdjacentElement("afterend", button);
                });

            document.querySelectorAll(".search-img").forEach(function (elem) {
                elem.parentNode.removeChild(elem);
            });
        }
    }
});

const onCategoryClicked = (category) => {
    window.location.href = "/products/category/" + category;
};

const onSubCategoryClicked = (subcategory) => {
    window.location.href = `/products/subcategory/${subcategory}`;
};

const onSearchResultSelected = (result) => {
    const productName = result
        .querySelector(".search-result-row-label")
        .innerHTML.toLowerCase()
        .replaceAll(" ", "_")
        .replace("<mark>", "")
        .replace("</mark>", "");

    const productId = GlobalVariables.products.find(
        (product) =>
            product.name.replaceAll(" ", "_").toLowerCase() === productName
    )?.id;

    if (productId != null) {
        window.location.href = `/products/product/${productId}`;
    }
};

const createListOfResults = (results, searchString) => {
    let resultElement = '<div id="search-results">';
    let i = 0;

    const regex = new RegExp(searchString, "gi");

    for (let result of results) {
        let highlightedDescription = "";

        if (document.body.clientWidth >= 1820) {
            let description = result.description.slice(0, 50);
            description += "<br>" + result.description.slice(50, 100);
            description += "<br>" + result.description.slice(100, 150);
            description += "<br>" + result.description.slice(150, 200);

            highlightedDescription = description.replace(
                regex,
                `<mark>${searchString}</mark>`
            );
        }
        const highlightedName = result.name.replace(
            regex,
            `<mark>${searchString}</mark>`
        );

        const formattedPrice = result.price
            .toLocaleString("en-US", {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2,
                useGrouping: true,
            })
            .replaceAll(",", " ");

        resultElement += `
            <div class="search-result-row ${
                i % 2 ? "pair-row" : ""
            }" onclick="onSearchResultSelected(this)">
                <img class="search-result-row-img" src="${
                    result.image_url
                }" alt="${result.alt_text}">
                <span class="search-result-row-label">${highlightedName}</span>
                <span class="search-result-row-category">${SubcategoriesMap.getFullPathFromId(
                    result.subcategory_id
                )}</span>
                <span class="search-result-row-description">${highlightedDescription}...</span>
                <span class="search-result-row-price">${formattedPrice} €</span>
            </div>
        `;
        i++;
    }
    resultElement += "</div>";

    return resultElement;
};

document.querySelector(".search-input").addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
        document.querySelector("#search-results-wrapper").innerHTML = "";
        return (event.target.value = "");
    }
});

document.querySelector("main").addEventListener("click", (event) => {
    document.querySelector("#search-results-wrapper").innerHTML = "";
    return (document.querySelector(".search-input").value = "");
});

document
    .querySelector(".search-input")
    .addEventListener("input", onSearchInputChanged);
