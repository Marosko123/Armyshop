
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


// spravit tri verzie tejto funkcie, jednu pre vsetky produkty a druhu pre produkty z kategorie a tretiu pre podkategorie
async function getAllProducts(pageNumber, category = null, subcategory = null) {

    // construct the URL based on whether a category or subcategory is specified
    let url = `/products?page=${pageNumber}`;
    if (category) {
        url += `/category/${category}`;
    } else if (subcategory) {
        url += `/subcategory/${subcategory}`;
    }

    // get all products from backend
    const productResponse = await getFromUrl(url);
    const pageProductList = productResponse.products;
    const count = productResponse.count;
    console.log(`Number of products: ${count}`);

    const notLikedImg = 'http://127.0.0.1:8000/images/productDetailImages/heart6.png';
    const likedImg = 'http://127.0.0.1:8000/images/productDetailImages/heart4.png';

    // get the liked products for each user
    const userId = 1; // local storage
    const response = await getFromUrl(`/liked_products/${userId}`);

    let likedArray = [];
    if (response.status === 200) {
        likedArray = response.products.map(product => product.product_id);
    } else {
        likedArray = [];
    }

    // create html for each product
    let productsHTML = '';
    for (const product of pageProductList) {
        const likedVersion = likedArray.includes(product.id) ? likedImg : notLikedImg;
        productsHTML += `
        <div class="card m-3">
            <!-- image source: unsplash.com -->
            <img class="card-img-top"
            src="${product.image_url}"
            alt="Card image cap">
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
                    <img src="http://127.0.0.1:8000/images/productDetailImages/cart.png" alt="" width="15%" class="cart-img">
                    <button type="button" class="btn btn-success btn-buy">Buy Now</button>
                </div>
        </div>`;
    }

    const cardContainer = document.getElementById('cards');
    cardContainer.innerHTML = productsHTML;

    // calculate the number of pages
    const numPages = Math.ceil(parseInt(count) / 18)
    // return the number of pages
    return numPages;

}

// get products from category
async function getProductsByCategory(categoryId) {
    const productResponse = await getFromUrl(`/products/category/${categoryId}`);
    const pageProductList = productResponse.products;

    const notLikedImg = 'http://127.0.0.1:8000/images/productDetailImages/heart6.png';
    const likedImg = 'http://127.0.0.1:8000/images/productDetailImages/heart4.png';

    // get the liked products for each user
    const userId = 1; // local storage
    const response = await getFromUrl(`/liked_products/${userId}`);

    let likedArray = [];
    if (response.status === 200) {
        likedArray = response.products.map(product => product.product_id);
    }

    // create html for each product
    let productsHTML = '';
    for (const product of pageProductList) {
        const likedVersion = likedArray.includes(product.id) ? likedImg : notLikedImg;
        productsHTML += `
        <div class="card m-3">
            <!-- image source: unsplash.com -->
            <img class="card-img-top"
            src="${product.image_url}"
            alt="Card image cap">
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
                    <img src="http://127.0.0.1:8000/images/productDetailImages/cart.png" alt="" width="15%" class="cart-img">
                    <button type="button" class="btn btn-success btn-buy">Buy Now</button>
                </div>
        </div>`;
    }
}

let numberOfPages = 10;

async function getInitialProducts() {
    console.log('getting page number');
    numberOfPages = await getAllProducts(1);
    console.log('pages ' + numberOfPages);
}

getInitialProducts();


// pagination
const page1 = document.getElementById('page1');
const page2 = document.getElementById('page2');
const page3 = document.getElementById('page3');
const pageNext = document.getElementById('page-next');
const pagePrevious = document.getElementById('page-prev');


page1.addEventListener('click', () => {
    const page1Number = parseInt(page1.textContent);
    getAllProducts(page1Number);
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

function hideExcessPageElements() {
    const pages = [page1, page2, page3];
    for (let i = 0; i < pages.length; i++) {
        if (parseInt(pages[i].textContent) > numberOfPages) {
            pages[i].classList.add("disabled-page");
        } else {
            pages[i].classList.remove("disabled-page");
        }
    }
}


// license toggle checkmark
function toggleCheckmark(checkmark) {
    if (checkmark.classList.contains("checkmark")) {
        checkmark.classList.remove("checkmark");
        // remove the checkmark image
        checkmark.src = "";
    } else {
        checkmark.classList.add("checkmark");
        // add the checkmark image
        checkmark.src = "http://127.0.0.1:8000/images/productDetailImages/checkmark.png";
    }
}

// slider range
const range1 = document.getElementById('myRange1');
const range2 = document.getElementById('myRange2');
const output = document.querySelector('.order-description');
output.textContent = '0 € - 50000 €'
range1.addEventListener('input', () => {
    console.log('hello');
    output.textContent = range1.value + " € - " + range2.value + " €";
});

range2.addEventListener('input', () => {
    output.textContent = range1.value + " € - " + range2.value + " €";
});