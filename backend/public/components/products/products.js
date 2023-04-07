
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

async function getAllProducts(pageNumber = 1) {
    // get all products from backend
    const productResponse = await getFromUrl('/products');
    const productList = productResponse.products;

    // get relevant products for page
    const productsPerPage = 15;
    const startIndex = (pageNumber - 1) * productsPerPage;
    const endIndex = pageNumber * productsPerPage;
    const pageProductList = productList.slice(startIndex, endIndex);

    const notLikedImg = 'http://127.0.0.1:8000/images/productDetailImages/heart6.png';
    const likedImg = 'http://127.0.0.1:8000/images/productDetailImages/heart4.png';

    // create html for each product
    let productsHTML = '';
    for (const product of pageProductList) {
        // find out if product is liked
        let liked = false;
        const userId = 1; // local storage
        const productId = product.id;
        const response = await getFromUrl(`/liked_products/${userId}/${productId}`);
        if (response.status === 200) {
            liked = true;
        }
        const likedVersion = liked ? likedImg : notLikedImg;
        productsHTML += `
        <div class="card m-3">
            <!-- image source: unsplash.com -->
            <img class="card-img-top"
            src="http://127.0.0.1:8000/images/productDetailImages/${product.image_url}"
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
}

console.time("slowFunction");
getAllProducts();
console.timeEnd("slowFunction");



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
