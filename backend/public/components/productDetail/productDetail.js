let product = "";
let userId = 0;
let priceFor1 = 0;
if (localStorage.getItem("armyshop_currently_signed_in_user") !== null) {
    userId =
        JSON.parse(localStorage.getItem("armyshop_currently_signed_in_user"))
            .id ?? 1;
}

// get product id from url
let productId = 0;
try {
    productId = parseInt(window.location.href.split("/").pop());
} catch (error) {
    window.location.href = "/404";
}

window.addEventListener("load", async function () {
    product = await ServerRequester.getFromUrl(`/products/${productId}`);

    const cartItems = JSON.parse(localStorage.getItem("cart"));
    if (!cartItems || !cartItems[productId]) {
        document.querySelector(".removeFromBasket").remove();
    }
});

function toggleIcon(likedPhoto) {
    if (likedPhoto.classList.contains("liked-photo-new")) {
        // removes from liked products
        // Image source: flaticon.com
        likedPhoto.src =
            "http://127.0.0.1:8000/images/productDetailImages/heart6.png";
        likedPhoto.classList.remove("liked-photo-new");

        // delete from liked products table
        ServerRequester.deleteFromUrl(
            `/liked_products/delete/${userId}/${productId}`
        );
    } else {
        // adds to liked products
        // Image source: flaticon.com
        likedPhoto.src =
            "http://127.0.0.1:8000/images/productDetailImages/heart4.png";
        likedPhoto.classList.add("liked-photo-new");

        // add to liked products table
        ServerRequester.postToUrl(
            `/liked_products/add/${userId}/${productId}`,
            {}
        );
    }
}

function setProductImage(product) {
    const container = document.getElementById("image-container");
    const images = product.image_url.split(" ");
    const image1 = images[0];
    container.innerHTML = "";
    let imageHTML = `<div class="carousel-item active">
                        <img class="d-block w-100 detail-image" src="${image1}" alt="detail image" style="width:50rem !important; height:35rem !important; object-fit:cover">
                    </div>`;
    for (let i = 1; i < images.length; i++) {
        imageHTML += `<div class="carousel-item">
                        <img class="d-block w-100 detail-image" src="${images[i]}" alt="detail image" style="width:50rem !important; height:35rem !important; object-fit:cover">
                    </div>`;
    }
    container.innerHTML = imageHTML;
}

// Function to set the product information on the page
function setProductInformation(product) {
    document.getElementById("product-title").innerHTML = product.name;
    document.getElementById("description").innerHTML = product.description;
    document.querySelector(".priceFor1").innerHTML =
        "Price for one: " + formatPriceMillions(product.price) + " €";
    priceFor1 = product.price;
    document.getElementById("total-price").innerHTML =
        formatPriceMillions(product.price) + " €";

    // set product image
    setProductImage(product);
    // find out if product is liked, if so, change the heart icon
    const likedPhoto = document.querySelector(".liked");
    ServerRequester.getFromUrl(`/liked_products/${userId}/${productId}`).then(
        (response) => {
            if (response.status === 200) {
                // Image source: flaticon.com
                likedPhoto.src =
                    "http://127.0.0.1:8000/images/productDetailImages/heart4.png";
                likedPhoto.classList.add("liked-photo-new");
            }
        }
    );
}

// Function to handle 404 errors
function handle404Error() {
    window.location.href = "/404";
}

// Function to get product information from the server
async function getProductInfo(productId) {
    const productInfo = await ServerRequester.getFromUrl(
        `/products/${productId}`
    );
    const isLiked = await ServerRequester.getFromUrl(
        `/liked_products/${userId}`
    );
    if (productInfo.status === 404) {
        handle404Error();
    } else {
        setProductInformation(productInfo.product);
    }
}

// Call getProductInfo() with the product ID
getProductInfo(productId);

const amountInput = document.getElementById("amount");
const plusBtn = document.getElementById("plusBtn");
const minusBtn = document.getElementById("minusBtn");

// plus and minus buttons
const totalPrice = document.getElementById("total-price");

plusBtn.addEventListener("click", () => {
    if (amountInput.value < 100) {
        amountInput.value++;

        totalPrice.innerHTML =
            formatPriceMillions((priceFor1 * amountInput.value).toFixed(2)) +
            " €";
    }
});

minusBtn.addEventListener("click", () => {
    if (amountInput.value > 1) {
        amountInput.value--;

        totalPrice.innerHTML =
            formatPriceMillions((priceFor1 * amountInput.value).toFixed(2)) +
            " €";
    }
});

// amount input change
amountInput.addEventListener("change", () => {
    if (amountInput.value < 1) {
        amountInput.value = 1;
    } else if (amountInput.value > 100) {
        amountInput.value = 100;
    }

    totalPrice.innerHTML =
        formatPriceMillions((priceFor1 * amountInput.value).toFixed(2)) + " €";
});

function formatPriceMillions(price) {
    if (price > 1000000) {
        price = (price / 1000000).toFixed(2) + "M";
    } else if (price > 100000) {
        price = (price / 1000).toFixed(2) + "K";
    }
    price = price.toString().replace(".", ",");
    return price;
}

document
    .querySelector(".removeFromBasket")
    .addEventListener("click", async (e) => {
        e.preventDefault();

        let shoppingCart = JSON.parse(localStorage.getItem("cart"));

        if (shoppingCart && shoppingCart[productId]) {
            await ServerRequester.deleteFromUrl(
                `/baskets/delete_all_items/${userId}/${productId}`
            );
            delete shoppingCart[productId];

            shoppingCart == {}
                ? localStorage.removeItem("cart")
                : localStorage.setItem("cart", JSON.stringify(shoppingCart));
            window.location.reload();
        }
    });

document.querySelector(".addToBasket").addEventListener("click", async (e) => {
    e.preventDefault();

    let data = JSON.parse(localStorage.getItem("cart"));

    if (!data) data = {};

    previousCount = parseInt(
        data[product.product.id] ? data[product.product.id].count : 0
    );
    console.log(previousCount);

    data[product.product.id] = {
        name: product.product["name"],
        image_url: product.product["image_url"],
        price: product.product["price"],
        alt_text: product.product["alt_text"],
        count:
            previousCount + parseInt(document.getElementById("amount").value),
    };

    localStorage.setItem("cart", JSON.stringify(data));

    user = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );
    if (user) {
        await ServerRequester.postToUrl(
            `/baskets/add/${user.id}/${productId}/${
                data[product.product.id].count
            }`,
            {
                body: data,
            }
        );
    }

    if (
        !document.querySelector(".add-remove-buttons-wrapper .removeFromBasket")
    ) {
        const removeFromCartButton = `
        <button class="removeFromBasket">
        <img width="30%" src="../../images/shoppingCartImages/3515498.png" alt="Empty Shopping Basket - Shopping Basket Icon Png@seekpng.com">
        <p class="small">Remove From Basket</p>
        </button>
    `;
        const newButton = document.createElement("div");
        newButton.innerHTML = removeFromCartButton;

        document
            .querySelector(".add-remove-buttons-wrapper")
            .appendChild(newButton);
    }
    alert("Product added to cart.");
});

document.getElementById("order-now").addEventListener("click", async (e) => {
    e.preventDefault();
    data = {};

    data[product.product.id] = {
        name: product.product["name"],
        image_url: product.product["image_url"],
        price: product.product["price"],
        alt_text: product.product["alt_text"],
        count: parseInt(document.getElementById("amount").value),
    };

    localStorage.setItem("buyNowCart", JSON.stringify(data));
    window.location.href = "/paymentDetail";
});

handlePopup = (orderNow = false) => {
    console.log("hello");
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
