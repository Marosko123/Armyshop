
function toggleIcon(likedPhoto) {
    if (likedPhoto.classList.contains("liked-photo-new")) { // removes from liked images
        // Image source: flaticon.com
        likedPhoto.src = "http://127.0.0.1:8000/images/productDetailImages/heart6.png";
        likedPhoto.classList.remove("liked-photo-new");
    } else { // adds to liked images
        // Image source: flaticon.com
        likedPhoto.src = "http://127.0.0.1:8000/images/productDetailImages/heart4.png";
        likedPhoto.classList.add("liked-photo-new");
    }
}

function addToCart() {

}


// dictionary for the categories
const categories = {
    'weapons': 1,
    'transport': 2,
    'clothing': 3,
    'explosives': 4,
    'equipment': 5,
    'accessories': 6
}


// dictionary for the subcategories
const subcategoriesDict = {
    'pistols': 1,
    'rifles': 2,
    'smgs': 3,
    'heavy': 4,
    'knives': 5,
    'cars': 6,
    'motorcycles': 7,
    'panzers': 8,
    'planes': 9,
    'boats': 10,
    'jackets': 11,
    'shirts': 12,
    'pants': 13,
    'shoes': 14,
    'socks': 15,
    'c4s': 16,
    'nukes': 17,
    'grenades': 18,
    'tnts': 19,
    'bombs': 20,
    'backpacks': 21,
    'hunting': 22,
    'camping': 23,
    'glasses': 24,
    'face paint': 25,
    'camouflage': 26
};

const categorySubcategoryMap = {
    "weapons": [1, 2, 3, 4, 5],
    "transport": [6, 7, 8, 9, 10],
    "clothing": [11, 12, 13, 14, 15],
    "explosives": [16, 17, 18, 19, 20],
    "equipment": [21, 22, 23],
    "accessories": [24, 25, 26]
};

const reverseSubcategoriesDict = {};
for (let key in subcategoriesDict) {
    reverseSubcategoriesDict[subcategoriesDict[key]] = key;
}

function getCategoryFromSubcategory(subcategory) {
    // Find the category that contains the subcategory
    for (const category in categorySubcategoryMap) {
        if (categorySubcategoryMap[category].includes(subcategoriesDict[subcategory])) {
            return category;
        }
    }
    // If the subcategory is not found, return null
    return null;
}



// function to get the subcategories for a category
function getSubcategoriesForCategory() {
    // Get the parent element for the subcategories
    const subcategoriesContainer = document.querySelector('.subcategories');
    let category = null;
    // find out whether there is a category in the url
    const url = window.location.href;
    if (url.includes('subcategory')) {
        category = getCategoryFromSubcategory(url.split('subcategory/')[1].split('?')[0]);
    }
    isCategory = url.includes('category')
    if (isCategory) {
        if (category === null) {
            // get the category from the url
            category = url.split('category/')[1];
            category = category.split('?')[0];
        }
        // get the subcategories for the category
        let subcategories = categorySubcategoryMap[category];
        console.log(subcategories);
        // get the subcategories names
        subcategories = subcategories.map(subcategory => reverseSubcategoriesDict[subcategory]);

        // Generate the HTML markup for the subcategories
        const subcategoriesMarkup = subcategories.map(subcategory => `
          <div class="subcategory" onclick="onSubCategoryClicked('${subcategory}')">
            <h3 class="description">${subcategory.charAt(0).toUpperCase() + subcategory.slice(1)}</h3>
          </div>
        `).join('');

        // Set the innerHTML of the parent container to the generated HTML
        subcategoriesContainer.innerHTML = subcategoriesMarkup;

        // delete the margin class from the parent container
        subcategoriesContainer.classList.remove('mt-3');
    }
}







const notLikedImg = 'http://127.0.0.1:8000/images/productDetailImages/heart6.png';
const likedImg = 'http://127.0.0.1:8000/images/productDetailImages/heart4.png';

likedArray = [];
// get all users liked products

async function getLikedProducts() {
    // get the liked products for each user
    const userId = 1; // local storage
    const response = await ServerRequester.getFromUrl(`/liked_products/${userId}`);

    if (response.status === 200) {
        likedArray = response.products.map(product => product.product_id);
    } else {
        likedArray = [];
    }
}



products = [];
count = 0;
reset = false;


// get all products and liked products
const waitForProducts = new Promise(resolve => {

    const checkCondition = () => {
        if (GlobalVariables.products.length > 0) {
            resolve();
        } else {
            setTimeout(checkCondition, 100);
        }
    };

    checkCondition();
});


function getBySubcategory(products, name) {
    const id = subcategoriesDict[name];
    return products.filter(p => p.subcategory_id === id);
}

function getByCategory(products, name) {
    console.log(products.length + ' ' + name);
    const subcategories = categorySubcategoryMap[name];
    return products.filter(p => subcategories.includes(p.subcategory_id));
}

// apply all filters
function applyFilters() {
    // build the query string
    let queryString = '?';

    // get the slider values
    const sliders = document.querySelectorAll(".slider-input");
    let slider1 = sliders[0].value;
    let slider2 = sliders[1].value;
    if (parseFloat(slider1) > parseFloat(slider2)) {
        // swap the values
        const temp = slider1;
        slider1 = slider2;
        slider2 = temp;
    }
    queryString += `min_price=${slider1}&max_price=${slider2}`;
    // license filter
    const license = document.querySelector('.checkmark-img');
    const licenseValue = license.classList.contains('checkmark') ? 1 : 0;
    queryString += `&license=${licenseValue}`;

    // order by filter
    const orderBy = document.querySelector('.dropbtn')
    if (orderBy.classList.contains('asc')) {
        queryString += `&order=asc`;
    } else if (orderBy.classList.contains('desc')) {
        queryString += `&order=desc`;
    }
    // get the current url
    const url = window.location.href;
    // delete all existing query parameters and add the new ones
    if (url.includes('?')) {
        queryString = url.split('?')[0] + queryString;
    }
    return window.location.href = queryString;
}

// reset filters
function resetFilters() {
    reset = true;
    // get the current url
    let url = window.location.href;
    // delete all existing query parameters
    if (url.includes('?')) {
        url = url.split('?')[0];
    }
    return (window.location.href = url);
}




function initializeSlider(pageProductList) {
    // slider for price range
    let maxPrice = 0;
    let minPrice = 0;
    const orderDescription = document.querySelector('.order-description');
    const sliders1 = document.querySelectorAll(".slider-input");
    let slider1 = sliders1[0];
    let slider2 = sliders1[1];
    // calculate the max and min price
    maxPrice = Math.max(...pageProductList.map(product => product.price));
    minPrice = Math.min(...pageProductList.map(product => product.price));
    orderDescription.textContent = `${minPrice} € - ${maxPrice} €`
    slider1.min = minPrice;
    slider1.max = maxPrice;
    slider2.min = minPrice;
    slider2.max = maxPrice;
    slider1.value = minPrice;
    slider2.value = maxPrice;
}

// initialize the slider values
function initializeSliderValues() {
    const sliders = document.querySelectorAll(".slider-input");
    let slider1 = sliders[0];
    let slider2 = sliders[1];
    const orderDescription = document.querySelector('.order-description');
    // change the values if first one is bigger
    if (slider1.value > slider2.value) {
        [slider1.value, slider2.value] = [slider2.value, slider1.value];
    }
    orderDescription.textContent = `${slider1.value} € - ${slider2.value} €`
}


function getProductsHTML(products, notLikedImg, likedImg, likedArray) {
    let productsHTML = "";
    for (const product of products) {
        const likedVersion = likedArray.includes(product.id) ? likedImg : notLikedImg;
        productsHTML += `
        <div class="card m-3" data-product-id="${product.id}" style="height:25rem !important;">
            <!-- image source: unsplash.com -->
            <img class="card-img-top"
            src="${product.image_url}"
            alt="Card image cap"
            style="height:15rem !important; object-fit:cover !important;">
            <div class="card-body d-flex align-items-center justify-content-between mx-auto">
                <div>
                    <h3 class="card-title">${product.name}</h3>
                    <p class="card-text">${product.price} €</p>
                </div>
                <!-- image source: flaticon.com -->
                <img src="${likedVersion}" alt="" width="14%" class="liked-photo" onclick="toggleIcon(this)">
            </div>
                <div class="card-body d-flex align-items-center justify-content-between mx-auto">
                    <!-- image source: flaticon.com -->
                    <img id='cart-button' src="http://127.0.0.1:8000/images/productDetailImages/cart.png" alt="" width="15%" class="cart-img">
                    <button type="button" class="btn btn-success btn-buy">Buy Now</button>
                </div>
        </div>`;
    }
    return productsHTML;
}


async function getAllProducts(page) {

    getSubcategoriesForCategory()

    await waitForProducts;
    console.log(`Number of products: ${GlobalVariables.products.length}`);
    products = GlobalVariables.products;
    // initialize slider
    // initializeSlider(products);


    // filter products by category or subcategory
    let category = '';
    let subcategory = '';
    let url = window.location.href;
    url = url.split('8000')[1];
    // find out whether to load all products or products from a category
    if (url.includes('subcategory')) {
        subcategory = url.split('subcategory/')[1];
        subcategory = subcategory.split('?')[0];
        products = getBySubcategory(products, subcategory)
    } else if (url.includes('category')) {
        category = url.split('category/')[1];
        category = category.split('?')[0];
        products = getByCategory(products, category);
    }

    if (!reset) {
        // filter by slider
        products = filterBySlider(products);
        // initializeSliderValues();
        initializeSlider(products)

        // filter by license
        products = filterByLicense(products);

        // order by price
        products = orderByPrice(products);
    }
    reset = false;

    
    count = products.length;

    // create html for each product
    let productsHTML = '';
    await getLikedProducts();
    // filter products by page
    productsByPage = products.slice((page - 1) * 18, page * 18);
    productsHTML = getProductsHTML(productsByPage, notLikedImg, likedImg, likedArray)

    const cardContainer = document.getElementById('cards');
    cardContainer.innerHTML = productsHTML;

    // add event listeners to cards
    addEventListenersToCards();

    // calculate the number of pages
    const numPages = Math.ceil(parseInt(count) / 18)
    hideExcessPageElements(numPages);
    // return the number of pages
    return numPages;
}

// add event listeners to cards
function addEventListenersToCards() {
    const productCards = document.querySelectorAll('.card');
    for (const card of productCards) {
        // get product id
        const productId = card.dataset.productId;
        // select card-img-top from this card
        const cardImg = card.querySelector('.card-img-top');

        cardImg.addEventListener('click', () => {
            window.location.href = `/products/product/${productId}`;
        });
        
        const cartButton = card.querySelector('#cart-button');

        cartButton.addEventListener('click', () => {
            data = [];
            data = JSON.parse(localStorage.getItem("cart"));
        
            if (!data)
                data = {}
        
            previousCount = parseInt(data[productId] ? data[productId].count : 0);
            console.log(productId);

            cartProduct = (Object.values(GlobalVariables.products).filter(globalProduct => globalProduct.id == productId)[0]);
            console.log(cartProduct)
            delete cartProduct['description'];
            delete cartProduct['id'];
            delete cartProduct['license_needed'];
            delete cartProduct['subcategory_id'];
            cartProduct['count'] = 1 + previousCount;
            
            data[productId] = cartProduct;

            localStorage.setItem("cart", JSON.stringify(data));

            user = JSON.parse(localStorage.getItem('armyshop_currently_signed_in_user'));
            if(user){
                fetch(`/api/baskets/add/${user.id}/${productId}/${data[productId].count}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .catch(error => console.error(error));
            }
        });
        
    }
}



function filterBySlider(products) {
    // get slider values from url
    const urlParams = new URLSearchParams(location.search);
    const minPrice = urlParams.get('min_price');
    const maxPrice = urlParams.get('max_price');
    if (minPrice && maxPrice) {
        const sliders1 = document.querySelectorAll(".slider-input");
        let slider1 = sliders1[0];
        let slider2 = sliders1[1];
        slider1.value = parseInt(minPrice);
        slider2.value = parseInt(maxPrice);

        // filter products
        products = products.filter(p => p.price >= minPrice && p.price <= maxPrice);

    }
    return products;
}

// filter by license
function filterByLicense(products) {
    // find out from url whether license is needed
    const urlParams = new URLSearchParams(location.search);
    const licenseNeeded = urlParams.get('license');
    console.log(urlParams);
    if (licenseNeeded && licenseNeeded != '0') {
        console.log(licenseNeeded + 'needed');
        licenseValue = true
        products = products.filter(p => p.license_needed === 1);
    } else if (licenseNeeded == '0'){
        console.log('zero');
        const license = document.getElementById('license-checkmark');
        license.classList.remove('checkmark');
        license.style.display = 'none';
        licenseValue = false
        products = products.filter(p => p.license_needed === 0);
    }
    return products;
}

// order by price
function orderByPrice(products) {
    // find out from url whether license is needed
    const urlParams = new URLSearchParams(location.search);
    const order = urlParams.get('order');
    if (order) {
        if (order === 'asc') {
            products = products.sort((a, b) => a.price - b.price);
        } else if (order === 'desc') {
            products = products.sort((a, b) => b.price - a.price);
        }
    }
    return products;
}


let numberOfPages = 10;

async function getInitialProducts() {
    numberOfPages = await getAllProducts(1);
}


waitForProducts.then(() => {
    getInitialProducts();
});

// pagination
const page1 = document.getElementById('page1');
const page2 = document.getElementById('page2');
const page3 = document.getElementById('page3');
const pageNext = document.getElementById('page-next');
const pagePrevious = document.getElementById('page-prev');


page1.addEventListener('click', () => {
    const page1Number = parseInt(page1.textContent);
    getAllProducts(page1Number, '3', '1');
});

page2.addEventListener('click', () => {
    const page2Number = parseInt(page2.textContent);
    getAllProducts(page2Number);
});

page3.addEventListener('click', () => {
    const page3Number = parseInt(page3.textContent);
    getAllProducts(page3Number);
});

pageNext.addEventListener('click', () => {
    console.log(numberOfPages);
    // update the page numbers and stop at the last page
    const page1Number = parseInt(page1.textContent) + 3;
    const page2Number = parseInt(page2.textContent) + 3;
    const page3Number = parseInt(page3.textContent) + 3;
    page1.textContent = page1Number;
    page2.textContent = page2Number;
    page3.textContent = page3Number;
    if (page3Number >= numberOfPages) {
        pageNext.classList.add("disabled-page");
    }
    if (pagePrevious.classList.contains("disabled-page")) {
        pagePrevious.classList.remove("disabled-page");
    }

    hideExcessPageElements();
});



pagePrevious.addEventListener('click', () => {
    // update the page numbers
    const page1Number = parseInt(page1.textContent) - 3;
    const page2Number = parseInt(page2.textContent) - 3;
    const page3Number = parseInt(page3.textContent) - 3;
    page1.textContent = page1Number;
    page2.textContent = page2Number;
    page3.textContent = page3Number;
    if (page1Number <= 1) {
        pagePrevious.classList.add("disabled-page");
    }
    if (pageNext.classList.contains("disabled-page")) {
        pageNext.classList.remove("disabled-page");
    }

    hideExcessPageElements();
});




// order by
const orderBy = document.querySelector('.dropbtn');
document.querySelector('.asc').addEventListener('click', () => {
    orderBy.classList.add('asc');
});
document.querySelector('.desc').addEventListener('click', () => {
    orderBy.classList.add('desc');
});

// apply filters
const applyFiltersBtn = document.getElementById('apply-button');
applyFiltersBtn.addEventListener('click', () => {
    applyFilters();
});

// reset filters
const resetFiltersBtn = document.querySelector('.reset-filters-btn');
resetFiltersBtn.addEventListener('click', () => {
    resetFilters();
});


function hideExcessPageElements(numPages) {
    console.log(numPages);
    const pages = [page1, page2, page3];
    for (let i = 0; i < pages.length; i++) {
        if (parseInt(pages[i].textContent) > numPages) {
            pages[i].classList.add("disabled-page");
        } else {
            pages[i].classList.remove("disabled-page");
        }
    }
    if (numPages <= 3) {
        pageNext.classList.add("disabled-page");
    }
}


// license toggle checkmark
function toggleCheckmark() {
    const checkmark = document.getElementById('license-checkmark');
    if (checkmark.classList.contains("checkmark")) {
        checkmark.classList.remove("checkmark");
        checkmark.style.display = 'none';
        // remove the checkmark image
        checkmark.src = "";
    } else {
        checkmark.style.display = 'block';
        checkmark.classList.add("checkmark");
        // add the checkmark image
        checkmark.src = "http://127.0.0.1:8000/images/productDetailImages/checkmark.png";
    }
}



function getVals() {
    // Get slider values
    var parent = this.parentNode;
    var slides = parent.getElementsByTagName("input");
    var slide1 = parseFloat(slides[0].value);
    var slide2 = parseFloat(slides[1].value);

    // Neither slider will clip the other, so make sure we determine which is larger
    if (slide1 > slide2) { let tmp = slide2; slide2 = slide1; slide1 = tmp; }
    let desc = parent.getElementsByClassName("order-description")[0];
    desc.innerHTML = slide1 + " € - " + slide2 + " €";
}

window.onload = function () {
    // Initialize Sliders
    var sliderSections = document.getElementsByClassName("range-slider");
    for (var x = 0; x < sliderSections.length; x++) {
        var sliders = sliderSections[x].getElementsByTagName("input");
        for (var y = 0; y < sliders.length; y++) {
            if (sliders[y].type === "range") {
                sliders[y].oninput = getVals;
                // Manually trigger event first time to display values
                sliders[y].oninput();
            }
        }
    }
}