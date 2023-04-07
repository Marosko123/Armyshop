
onAddToBasketClicked = (event) => {
    // TODO: create popup added to basket
};

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



// document.querySelector('.add-to-basket').addEventListener('click', () => {
    // const amount = document.querySelector('#amount').value;
    // const productId = document.querySelector('#product-id').value;
    // const productTitle = document.querySelector('#product-title').value;
    // const productPrice = document.querySelector('#product-price').value;
    // const productImage = document.querySelector('#product-image').value;

    // const basket = {
    //     amount: amount,
    //     productId: productId,
    //     productTitle: productTitle,
    //     productPrice: productPrice,
    //     productImage: productImage
    // };

    // fetch('/add-to-basket', {
    //     method: 'POST',
    //     body: JSON.stringify(basket),
    //     headers: {
    //         'Content-Type': 'application/json'
    //     }
    // }).then(res => {
    //     if (res.ok) {
    //         return res.json()
    //     }
    // }).then(data => {
    //     console.log(data);
    // }).catch(err => {
    //     console.log(err);
    // });
// });
  