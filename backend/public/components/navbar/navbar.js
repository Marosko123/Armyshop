console.log("test");

document.querySelector(".search-input").addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
        document.querySelector("#search-results-wrapper").innerHTML = "";
        return (event.target.value = "");
    }
});

document.querySelector("#landing-page").addEventListener("click", (event) => {
    document.querySelector("#search-results-wrapper").innerHTML = "";
    return (document.querySelector(".search-input").value = "");
});

const onSearchInputChanged = (event) => {
    console.log(event.value);

    const searchResult = createListOfResults([
        {
            img: "https://im9.cz/sk/iR/importprodukt-orig/e97/e973cf874f7c5b77944518743de8b9ff--mmf350x350.jpg",
            label: "Nozik",
            category: "weapons/knives",
            price: "10",
        },
        {
            img: "https://shop.militaryrange.sk/Content/custom/img_products_small/ko-1823-1.jpg",
            label: "Ak47",
            category: "weapons/rifles",
            price: "584",
        },
        {
            img: "https://im9.cz/sk/iR/importprodukt-orig/e97/e973cf874f7c5b77944518743de8b9ff--mmf350x350.jpg",
            label: "Nozik",
            category: "weapons/knives",
            price: "10",
        },
        {
            img: "https://shop.militaryrange.sk/Content/custom/img_products_small/ko-1823-1.jpg",
            label: "Ak47",
            category: "weapons/rifles",
            price: "584",
        },
        {
            img: "https://im9.cz/sk/iR/importprodukt-orig/e97/e973cf874f7c5b77944518743de8b9ff--mmf350x350.jpg",
            label: "Nozik",
            category: "weapons/knives",
            price: "10",
        },
        {
            img: "https://shop.militaryrange.sk/Content/custom/img_products_small/ko-1823-1.jpg",
            label: "Ak47",
            category: "weapons/rifles",
            price: "584",
        },
        {
            img: "https://im9.cz/sk/iR/importprodukt-orig/e97/e973cf874f7c5b77944518743de8b9ff--mmf350x350.jpg",
            label: "Nozik",
            category: "weapons/knives",
            price: "10",
        },
        {
            img: "https://shop.militaryrange.sk/Content/custom/img_products_small/ko-1823-1.jpg",
            label: "Ak47",
            category: "weapons/rifles",
            price: "584",
        },
    ]);

    document.getElementById("search-results-wrapper").innerHTML = searchResult;
};

const onShoppingCartClicked = () => {
    window.location.href = "/shoppingcart";
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
        result
            .querySelector(".search-result-row-category")
            .innerHTML.toLowerCase()
            .replace(" ", "_") +
        "/" +
        result
            .querySelector(".search-result-row-label")
            .innerHTML.toLowerCase()
            .replace(" ", "_");
    window.location.href = resultString;
};

const createListOfResults = (results) => {
    let resultElement = '<div id="search-results">';
    let i = 0;

    for (let result of results) {
        resultElement += `
            <div class="search-result-row ${
                i % 2 ? "pair-row" : ""
            }" onclick="onSearchResultSelected(this)">
                <img class="search-result-row-img" src="${result.img}" alt="">
                <span class="search-result-row-label">${result.label}</span>
                <span class="search-result-row-category">${
                    result.category
                }</span>
                <span class="search-result-row-price">${result.price} €</span>
            </div>
        `;
        i++;
    }
    resultElement += "</div>";

    return resultElement;
};
