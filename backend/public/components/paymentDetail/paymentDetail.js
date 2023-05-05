let paymentMethod = "By card";

//delivery options cost

const shippingCosts = {
    inStorePickup: 0,
    postOffice: 2.5,
    dhl: 3.5,
};

let deliveryMethod = "Pick up in the store";
let selectedShippingCost = shippingCosts["inStorePickup"];

onDeliveryOptionChanged = (event) => {
    document
        .querySelectorAll(".delivery-checkbox")
        .forEach((c) => (c.checked = false));
    event.checked = true;

    deliveryMethod = event.parentElement
        .getElementsByClassName("delivery-label")[0]
        .innerHTML.trim();

    selectedShippingCost =
        shippingCosts[
            event.parentElement.getElementsByClassName("delivery-price")[0].id
        ];

    calculateSummary();
};

onPaymentOptionChanged = (event) => {
    document
        .querySelectorAll(".payment-checkbox")
        .forEach((c) => (c.checked = false));
    event.checked = true;

    paymentMethod = event.parentElement
        .getElementsByClassName("payment-label")[0]
        .innerHTML.trim();
};

onOrderNowClicked = async (event) => {
    const inputElements = {
        firstName: document.getElementById("first-name-input"),
        lastName: document.getElementById("last-name-input"),
        email: document.getElementById("email-input"),
        address: document.getElementById("address-input"),
        zip: document.getElementById("zip-input"),
        city: document.getElementById("city-input"),
        country: document.getElementById("country-input"),
        telephone: document.getElementById("telephone-input"),
    };

    user = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );

    if (user == null) {
        user = {
            id: null,
        };
    }

    cart = JSON.parse(localStorage.getItem("cart"));
    productIDs = Object.keys(cart);

    orderedProducts = {};

    for (const key in productIDs)
        orderedProducts[productIDs[key]] = cart[productIDs[key]].count;

    data = {
        delivery: getKeyByValue(shippingCosts, selectedShippingCost),
        payment: paymentMethod,
        ordered_products: JSON.stringify(orderedProducts),
        first_name: inputElements.firstName.value,
        last_name: inputElements.lastName.value,
        email: inputElements.email.value,
        address: inputElements.address.value,
        zip_code: inputElements.zip.value,
        city: inputElements.city.value,
        country: inputElements.country.value,
        phone: inputElements.telephone.value,
    };

    if (PaymentDetailValidator.areAllInputsValid(inputElements)) {
        const response = await ServerRequester.postToUrl(
            `/finished_orders/${user.id}`,
            {
                delivery: data.delivery,
                payment: data.payment,
                ordered_products: data.ordered_products,
                first_name: data.first_name,
                last_name: data.last_name,
                email: data.email,
                address: data.address,
                zip_code: data.zip_code,
                city: data.city,
                country: data.country,
                phone: data.phone,
            }
        );

        console.log(response);

        if (response.status === 200) {
            a = document.querySelector("#payment-detail form").reset();
            return handlePopup();
        }
        if (response.status === 401) {
            setError(loginEmail, "Invalid credentials");
            return setError(loginPassword1, "Invalid credentials");
        }
        if (response.status === 422) {
            if (response.errors.email) {
                setError(loginEmail, response.errors.email);
            }
            if (response.errors.password) {
                setError(loginPassword1, response.errors.password);
            }
        }
    }
};

handlePopup = () => {
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
            return (window.location.href = "/");
        }
    }, 1000);
};

//load logged in user data
window.addEventListener("load", function () {
    //do not load data if user is not logged in
    data = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );
    if (data != null) {
        //load user data into fields
        if (data.email)
            document.getElementById("email-input").value = data.email;

        if (data.phone)
            document.getElementById("telephone-input").value = data.phone;

        if (data.first_name)
            document.getElementById("first-name-input").value = data.first_name;

        if (data.last_name)
            document.getElementById("last-name-input").value = data.last_name;

        if (data.address) {
            addressFields = data.address.split(",");
            document.getElementById("address-input").value = addressFields[0];
            document.getElementById("zip-input").value = addressFields[1];
            document.getElementById("city-input").value = addressFields[2];
            document.getElementById("country-input").value = addressFields[3];
        }
    }

    document.getElementById("inStorePickupCost").innerText =
        Formatter.formatPrice(shippingCosts["inStorePickup"]);
    document.getElementById("postOfficeCost").innerText = Formatter.formatPrice(
        shippingCosts["postOffice"]
    );
    document.getElementById("dhlCost").innerText = Formatter.formatPrice(
        shippingCosts["dhl"]
    );

    calculateSummary();
});

function calculateSummary() {
    buyNowCart = JSON.parse(localStorage.getItem("buyNowCart"));
    if (buyNowCart) {
        subtotal = 0;
        for (let key in buyNowCart)
            subtotal += buyNowCart[key].price * buyNowCart[key].count;

        document.getElementById(`subtotal`).innerText =
            Formatter.formatPrice(subtotal);
        document.getElementById(`shipping`).innerText =
            Formatter.formatPrice(selectedShippingCost) +
            ` (${deliveryMethod})`;
        document.getElementById(`total`).innerText = Formatter.formatPrice(
            subtotal + selectedShippingCost
        );
        return;
    }

    data = JSON.parse(localStorage.getItem("cart"));
    subtotal = 0;
    for (let key in data) subtotal += data[key].price * data[key].count;

    document.getElementById(`subtotal`).innerText =
        Formatter.formatPrice(subtotal);
    document.getElementById(`shipping`).innerText =
        Formatter.formatPrice(selectedShippingCost) + ` (${deliveryMethod})`;
    document.getElementById(`total`).innerText = Formatter.formatPrice(
        subtotal + selectedShippingCost
    );
}

function getKeyByValue(object, value) {
    return Object.keys(object).find((key) => object[key] === value);
}
