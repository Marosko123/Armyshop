
let product = '';
let productID = 0;

window.addEventListener('load', async function () {
    productID = window.location.href.split("/")[window.location.href.split("/").length - 1];
    product = await ServerRequester.getFromUrl(`/products/${productID}`);
    console.log(product);
});

function toggleIcon(likedPhoto) {
    if (likedPhoto.classList.contains("liked-photo-new")) { // removes from liked products
        // Image source: flaticon.com
        likedPhoto.src = "http://127.0.0.1:8000/images/productDetailImages/heart6.png";
        likedPhoto.classList.remove("liked-photo-new");

        // delete from liked products table
        // const productId = window.location.href.split("/").pop();
        const productId = 1
        // get user_id from local storage
        const userId = 1
        console.log('Removing from liked products');
        ServerRequester.deleteFromUrl(`/liked_products/delete/${userId}/${productId}`);
    } else { // adds to liked products
        // Image source: flaticon.com
        likedPhoto.src = "http://127.0.0.1:8000/images/productDetailImages/heart4.png";
        likedPhoto.classList.add("liked-photo-new");

        // add to liked products table
        // const productId = window.location.href.split("/").pop();
        const productId = 1
        // get user_id from local storage
        const userId = 1
        console.log('Adding to liked products');
        ServerRequester.postToUrl(`/liked_products/add/${userId}/${productId}`, {});
    }
}

// get product information
// get product id from url
const productId = window.location.href.split("/").pop();
console.log(productId);

// Function to set the product information on the page
function setProductInformation(product) {
    document.getElementById("product-title").innerHTML = product.name;
    document.getElementById("description").innerHTML = product.description;
    document.querySelector('.priceFor1').innerHTML = "Price for 1: " + product.price + " €";
    document.getElementById("total-price").innerHTML = product.price + " €";

    // set product image
    document.querySelector('.detail-image').src = product.image_url;
    // find out if product is liked, if so, change the heart icon
    const likedPhoto = document.querySelector(".liked");
    const userId = 1;
    const productId = 1;
    ServerRequester.getFromUrl(`/liked_products/${userId}/${productId}`).then((response) => {
        if (response.status === 200) {
            // Image source: flaticon.com
            likedPhoto.src = "http://127.0.0.1:8000/images/productDetailImages/heart4.png";
            likedPhoto.classList.add("liked-photo-new");
        }
    });
}

// Function to handle 404 errors
function handle404Error() {
    window.location.href = "/404";
}

// Function to get product information from the server
async function getProductInfo(productId) {
    const productInfo = await ServerRequester.getFromUrl(`/products/${productId}`);
    if (productInfo.status === 404) {
        handle404Error();
    } else {
        setProductInformation(productInfo.product);
    }
}

// Call getProductInfo() with the product ID
getProductInfo(productId);


const amountInput = document.getElementById('amount')
const plusBtn = document.getElementById('plusBtn')
const minusBtn = document.getElementById('minusBtn')

// plus and minus buttons
const totalPrice = document.getElementById('total-price')

plusBtn.addEventListener("click", () => {
    if (amountInput.value < 100) {
        amountInput.value++;

        // update total price
        const priceFor1 = document.querySelector('.priceFor1').innerHTML.split(" ")[3]
        totalPrice.innerHTML = (priceFor1 * amountInput.value).toFixed(2) + " €"
    }
});

minusBtn.addEventListener("click", () => {
    if (amountInput.value > 1) {
        amountInput.value--;

        // update total price
        const priceFor1 = document.querySelector('.priceFor1').innerHTML.split(" ")[3]
        totalPrice.innerHTML = (priceFor1 * amountInput.value).toFixed(2) + " €"
    }
});

// amount input change
amountInput.addEventListener("change", () => {
    if (amountInput.value < 1) {
        amountInput.value = 1;
    } else if (amountInput.value > 100) {
        amountInput.value = 100;
    }
    // update total price
    const priceFor1 = document.querySelector('.priceFor1').innerHTML.split(" ")[3]
    totalPrice.innerHTML = (priceFor1 * amountInput.value).toFixed(2) + " €"
});



document.querySelector('.addToBasket').addEventListener('click', async (e) => {
    e.preventDefault()

    data = [];
    data = JSON.parse(localStorage.getItem("cart"));

    if (!data)
        data = {}

    previousCount = parseInt(data[product.product.id] ? data[product.product.id].count : 0);
    console.log(previousCount);

    data[product.product.id] = {
        'name': product.product['name'],
        'image_url': product.product['image_url'],
        'price': product.product['price'],
        'alt_text': product.product['alt_text'],
        'count': previousCount + parseInt(document.getElementById('amount').value)
    }

    localStorage.setItem("cart", JSON.stringify(data));

    user = JSON.parse(localStorage.getItem('armyshop_currently_signed_in_user'));
    if(user){
        fetch(`/api/baskets/add/${user.id}/${productID}/${data[product.product.id].count}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .catch(error => console.error(error));
    }

    alert("Product added to cart.");
});

document.getElementById('order-now').addEventListener('click', async (e) => {
    e.preventDefault()
    data = {};

    data[product.product.id] = {
        'name': product.product['name'],
        'image_url': product.product['image_url'],
        'price': product.product['price'],
        'alt_text': product.product['alt_text'],
        'count': parseInt(document.getElementById('amount').value)
    }

    localStorage.setItem("buyNowCart", JSON.stringify(data));
    window.location.href = "/paymentDetail";
});

handlePopup = (orderNow = false) => {
    console.log('hello');
    window.location.assign("#popup1");
    const countdownEl = document.getElementById("countdown");
    const popupInfo = document.querySelector(".popup-info");
    const popupGoto = document.querySelector(".popup-goto");
    if (orderNow) {
        popupInfo.textContent = "You have ordered the product!";
        popupGoto.textContent = "Proceed to payment";
        popupGoto.href = "/paymentDetail";
    } else {
        popupInfo.textContent = "You have added the product to your basket!";
        popupGoto.textContent = "Go to basket";
        popupGoto.href = "/basket";
    }
    let count = 4;

    const countdownInterval = setInterval(() => {
        if (count > 0) {
            countdownEl.textContent = `Auto redirect in: ${count}`;
            count--;
        } else {
            clearInterval(countdownInterval);
            countdownEl.textContent = "Redirecting...";
            if (orderNow) return (window.location.href = "/paymentDetail");
            return (window.location.href = "/basket");
        }
    }, 1000);
};
