window.addEventListener("load", function () {
    loadCart();
});

function loadCart() {
    data = JSON.parse(localStorage.getItem("cart"));
    console.log(data);

    listElement = document.getElementById("products");
    listElement.innerHTML = "";

    if (!data) listElement.innerHTML = "<li>Shopping cart is empty...</li>";

    for (let key in data) {
        product = document.createElement("li");
        product.setAttribute("id", "product_" + key);
        product.innerHTML = `
        <div class="item">
          <!-- image source: unsplash.com -->
          <img class="img" src="${data[key].image_url.split(' ')[0]}" alt="${
            data[key].alt_text
        }" width="100px" height="90px">
          <div class="desc">
            <div class="title-remove">
              <h3>${data[key].name}
              </h3>
              <button class="remove-button" id="remove-button_${key}">
                <!-- image source: flaticon.com -->
                <img class="remove-button-img" src="../../images/shoppingCartImages/3515498.png">
              </button>
            </div>
            <div class="prices">
              <p class="singularPrice">${formatPriceMillions(data[key].price)} €</p>
              <div class="multiple">
                <div class="countControls">
                  <button class="countControlButtons" id="minusButton_${key}">-</button>
                  <input id="count_${key}" type="number" value="${
            data[key].count
        }">
                  <button class="countControlButtons" id="plusButton_${key}">+</button>
                </div>
                <p class="multiplePrice" id="multiplePrice_${key}">${formatPriceMillions(data[key].price * data[key].count)} €</p>
              </div>
            </div>
          </div>
        </div>`;

        listElement.appendChild(product);

        document
            .getElementById(`count_${key}`)
            .addEventListener("change", function () {
                input = document.getElementById(`count_${key}`);
                if (input.value < 1) input.value = 1;
                else if (input.value > 100) input.value = 100;

                handleProductCountChange(key, false, false, input.value);
            });

        document
            .getElementById(`plusButton_${key}`)
            .addEventListener("click", function () {
                input = document.getElementById(`count_${key}`);
                if (input.value < 100)
                    handleProductCountChange(key, true, false, null);
            });

        document
            .getElementById(`minusButton_${key}`)
            .addEventListener("click", function () {
                input = document.getElementById(`count_${key}`);
                if (input.value > 1)
                    handleProductCountChange(key, false, true, null);
                else 
                    removeProduct(key);
            });

        document
            .getElementById(`remove-button_${key}`)
            .addEventListener("click", function () {   
                removeProduct(key);
            });
    }
    calculateSummary(data);
}

const onContinueButtonClicked = () => {
    localStorage.removeItem("buyNowCart");
    if (!JSON.parse(localStorage.getItem("cart"))) {
        alert("Add some products before checking out.");
        return;
    }
    window.location.href = "paymentDetail";
};

function formatPriceMillions(price) {
    if (price > 1000000) {
      price = (price / 1000000).toFixed(2) + "M";
    } else if (price > 100000) {
        price = (price / 1000).toFixed(2) + "K";
    } else {
        price = price.toFixed(2);
    }
    price = price.toString().replace('.', ',')
    return price;
}

function handleProductCountChange(key, increment, decrement, value) {
    data = JSON.parse(localStorage.getItem("cart"));

    if (increment) data[key].count = parseInt(data[key].count) + 1;
    else if (decrement) data[key].count = parseInt(data[key].count) - 1;
    else if (value) data[key].count = value;

    input = document.getElementById(`count_${key}`);
    input.value = parseInt(data[key].count);

    document.getElementById(`multiplePrice_${key}`).innerText =
        formatPriceMillions(data[key].price * data[key].count) + '€';

    calculateSummary(data);

    localStorage.setItem("cart", JSON.stringify(data));

    saveToDB(key, data[key].count);
}

function calculateSummary(data) {
    subtotal = 0;
    for (let key in data) subtotal += data[key].price * data[key].count;

    document.getElementById(`total`).innerText =
        formatPriceMillions(subtotal) + '€';
}

function saveToDB(productID, count, remove) {
    user = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );
    if (!user) return;

    if (remove) {
        fetch(`/api/baskets/delete/${user.id}/${productID}`, {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json",
            },
        })
            .then((response) => response.json())
            .catch((error) => console.error(error));
        return;
    }

    fetch(`/api/baskets/add/${user.id}/${productID}/${count}`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
    })
        .then((response) => response.json())
        .catch((error) => console.error(error));
}

function removeProduct(key){
    if (!confirm("Do you really want to remove this product?"))
    return;

    data = JSON.parse(localStorage.getItem("cart"));
    delete data[key];
    localStorage.setItem("cart", JSON.stringify(data));

    calculateSummary(data);

    console.log(localStorage.getItem("cart"));
    if (localStorage.getItem("cart") === "{}") {
        localStorage.removeItem("cart");

        listElement.innerHTML =
            "<li>Shopping cart is empty...</li>";
        return;
    }

    var product = document.getElementById(`product_${key}`);
    product.parentNode.removeChild(product);
    saveToDB(key, null, true);
}

function deleteAllProductsFromCart() {
    let cartItems = JSON.parse(localStorage.getItem("cart"));

    for (let productIndex in cartItems) {
        saveToDB(productIndex, null, true);
    }

    localStorage.removeItem("cart");
}

function saveProductsToCart(productsJsonString) {
    localStorage.setItem("cart", productsJsonString);
    let cartItems = JSON.parse(productsJsonString);

    for (let productIndex in cartItems) {
        saveToDB(productIndex, cartItems[productIndex].count);
    }
}

function exportAsJSON() {
    const csvFileData = localStorage.getItem("cart");

    if(!csvFileData) {
        alert("Nothing to export!");
        return;
    }

    let hiddenElement = document.createElement("a");
    hiddenElement.href =
        "data:text/json;charset=utf-8," + encodeURI(csvFileData);
    hiddenElement.target = "_blank";

    hiddenElement.download = "shopping_cart.json";
    hiddenElement.click();
}

async function importJSON() {
    const fileSelected = new Promise((resolve) => {
        const fileInput = document.getElementById("selectedFile");
        fileInput.addEventListener("change", () => resolve(fileInput.files[0]));
        fileInput.click();
    });

    const file = await fileSelected;

    const fileReader = new FileReader();
    fileReader.readAsText(file);

    const fileLoaded = new Promise((resolve) => {
        fileReader.addEventListener("load", () => resolve(fileReader.result));
    });

    const fileContents = await fileLoaded;
    deleteAllProductsFromCart();

    saveProductsToCart(fileContents);
    loadCart();
}
