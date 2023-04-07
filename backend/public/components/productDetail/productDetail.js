

function toggleIcon(likedPhoto) {
    if (likedPhoto.classList.contains("liked-photo-new")) { // removes from liked products
        // Image source: flaticon.com
        likedPhoto.src = "http://127.0.0.1:8000/images/productDetailImages/heart6.png";
        likedPhoto.classList.remove("liked-photo-new");
        
        // delete from liked products table
        const productId = window.location.href.split("/").pop();
        const userId = 1
        // deleteFromUrl(`/liked_products/${userId}/${productId}`);
    } else { // adds to liked products
        // Image source: flaticon.com
        likedPhoto.src = "http://127.0.0.1:8000/images/productDetailImages/heart4.png";
        likedPhoto.classList.add("liked-photo-new");

        // add to liked products table
        // const productId = window.location.href.split("/").pop();
        const productId = 5
        const userId = 5
        console.log('hello');
        postToUrl(`/liked_products/add/${userId}/${productId}`, {});
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
}

// Function to handle 404 errors
function handle404Error() {
    window.location.href = "/404";
}

// Function to get product information from the server
async function getProductInfo(productId) {
    const productInfo = await getFromUrl("/products/3");
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
// const priceFor1 = document.querySelector('.priceFor1')

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



document.querySelector('.addToBasket').addEventListener('click', async () => {
    const amount = document.getElementById('amount').value;

    const basket = {
        amount: amount
    };

    const response = await postToUrl(`/baskets/add/1/1/${amount}`, basket);
});

document.getElementById('order-now').addEventListener('click', async () => {
    const amount = document.getElementById('amount').value;

    const basket = {
        amount: amount
    };
    return handlePopup(true);
    
});

handlePopup = (orderNow = false) => {
    window.location.assign("#popup1");
    const countdownEl = document.getElementById("countdown");
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
  