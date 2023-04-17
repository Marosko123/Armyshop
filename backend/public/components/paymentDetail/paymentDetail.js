let paymentMethod = "By card";

//delivery options cost

const shippingCosts = {
    'inStorePickupCost': 0,
    'postOfficeCost': 2.5,
    'dhlCost': 3.5,
}

let deliveryMethod = "Pick up in the store";
let selectedShippingCost = shippingCosts['inStorePickupCost'];

onDeliveryOptionChanged = (event) => {
    document
        .querySelectorAll(".delivery-checkbox")
        .forEach((c) => (c.checked = false));
    event.checked = true;

    deliveryMethod = event.parentElement
        .getElementsByClassName("delivery-label")[0]
        .innerHTML.trim();

    selectedShippingCost = shippingCosts[event.parentElement.getElementsByClassName("delivery-price")[0].id];

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

    // if (areAllInputsValid(inputElements)) {
    //     const ordered_products = localStorage.getItem(
    //         `armyshop-shopping-cart-of-user-${1}`
    //     );
    //     const delivery_details = JSON.stringify({
    //         firstName: inputElements.firstName.value.trim(),
    //         lastName: inputElements.lastName.value.trim(),
    //         email: inputElements.email.value.trim(),
    //         address: inputElements.address.value.trim(),
    //         zip: inputElements.zip.value.trim().replaceAll(" ", ""),
    //         city: inputElements.city.value.trim(),
    //         country: inputElements.country.value.trim(),
    //         telephone: inputElements.telephone.value.trim().replaceAll(" ", ""),
    //         deliveryMethod,
    //         paymentMethod,
    //     });
    //     const response = await ServerRequester.postToUrl("/finished_orders/1", {
    //         ordered_products,
    //         delivery_details,
    //     });

    //     console.log(response);

    //     if (response.status === 200) {
    //         a = document.querySelector("#payment-detail form").reset();
    //         return handlePopup();
    //     }
    //     if (response.status === 401) {
    //         setError(loginEmail, "Invalid credentials");
    //         return setError(loginPassword1, "Invalid credentials");
    //     }
    //     if (response.status === 422) {
    //         if (response.errors.email) {
    //             setError(loginEmail, response.errors.email);
    //         }
    //         if (response.errors.password) {
    //             setError(loginPassword1, response.errors.password);
    //         }
    //     }
    // }

    handlePopup();
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
window.addEventListener('load', function () {
    //do not load data if user is not logged in
    data = JSON.parse(localStorage.getItem("armyshop_currently_signed_in_user"));
    if (data != null) {
        //load user data into fields
        if (data.email)
            document.getElementById('email-input').value = data.email;

        if (data.phone)
            document.getElementById('telephone-input').value = data.phone;

        if (data.first_name)
            document.getElementById('first-name-input').value = data.first_name;

        if (data.last_name)
            document.getElementById('last-name-input').value = data.last_name;

        if (data.address) {
            addressFields = data.address.split(",");
            document.getElementById('address-input').value = addressFields[0];
            document.getElementById('zip-input').value = addressFields[1];
            document.getElementById('city-input').value = addressFields[2];
            document.getElementById('country-input').value = addressFields[3];
        }
    }

    document.getElementById('inStorePickupCost').innerText = Formatter.formatPrice(shippingCosts['inStorePickupCost']);
    document.getElementById('postOfficeCost').innerText = Formatter.formatPrice(shippingCosts['postOfficeCost']);
    document.getElementById('dhlCost').innerText = Formatter.formatPrice(shippingCosts['dhlCost']);

    calculateSummary();
});

function calculateSummary() {
    buyNowCart = JSON.parse(localStorage.getItem("buyNowCart"));
    if(buyNowCart){
        subtotal = 0;
        for (let key in buyNowCart)
            subtotal += (buyNowCart[key].price * buyNowCart[key].count);

        document.getElementById(`subtotal`).innerText = Formatter.formatPrice(subtotal);
        document.getElementById(`shipping`).innerText = Formatter.formatPrice(selectedShippingCost) + ` (${deliveryMethod})`;
        document.getElementById(`total`).innerText = Formatter.formatPrice(subtotal + selectedShippingCost);
        return;
    }
    
    data = JSON.parse(localStorage.getItem("cart"));
    subtotal = 0;
    for (let key in data)
        subtotal += (data[key].price * data[key].count);

    document.getElementById(`subtotal`).innerText = Formatter.formatPrice(subtotal);
    document.getElementById(`shipping`).innerText = Formatter.formatPrice(selectedShippingCost) + ` (${deliveryMethod})`;
    document.getElementById(`total`).innerText = Formatter.formatPrice(subtotal + selectedShippingCost);
}