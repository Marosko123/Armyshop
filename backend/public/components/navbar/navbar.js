const onSearchInputChanged = async (event) => {
    const searchString = event.target.value.replace(" ", "+");

    const listOfProducts = await getFromUrl(
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

const onProfileClicked = () => {
    window.location.href = "/profile";
};

const onCategoryClicked = (category) => {
    window.location.href = "/products/" + category;
};

const onSubCategoryClicked = (category, subcategory) => {
    window.location.href = `/products/${category}/${subcategory}`;
};

const onSearchResultSelected = (result) => {
    const resultString =
        "/products/" +
        result
            .querySelector(".search-result-row-category")
            .innerHTML.toLowerCase()
            .replace(" ", "_") +
        "/" +
        result
            .querySelector(".search-result-row-label")
            .innerHTML.toLowerCase()
            .replace(" ", "_")
            .replace("<mark>", "")
            .replace("</mark>", "");
    window.location.href = resultString;
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
