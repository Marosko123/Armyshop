let deliveryMethod = "Pick up in the store";
let paymentMethod = "By card";

onDeliveryOptionChanged = (event) => {
    document
        .querySelectorAll(".delivery-checkbox")
        .forEach((c) => (c.checked = false));
    event.checked = true;

    deliveryMethod = a.parentElement
        .getElementsByClassName("payment-label")[0]
        .innerHTML.trim();
};

onPaymentOptionChanged = (event) => {
    document
        .querySelectorAll(".payment-checkbox")
        .forEach((c) => (c.checked = false));
    event.checked = true;

    paymentMethod = a.parentElement
        .getElementsByClassName("delivery-label")[0]
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

    if (areAllInputsValid(inputElements)) {
        const ordered_products = localStorage.getItem(
            `armyshop-shopping-cart-of-user-${1}`
        );
        const delivery_details = JSON.stringify({
            firstName: inputElements.firstName.value.trim(),
            lastName: inputElements.lastName.value.trim(),
            email: inputElements.email.value.trim(),
            address: inputElements.address.value.trim(),
            zip: inputElements.zip.value.trim().replaceAll(" ", ""),
            city: inputElements.city.value.trim(),
            country: inputElements.country.value.trim(),
            telephone: inputElements.telephone.value.trim().replaceAll(" ", ""),
            deliveryMethod,
            paymentMethod,
        });
        const response = await postToUrl("/finished_orders/1", {
            ordered_products,
            delivery_details,
        });

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
