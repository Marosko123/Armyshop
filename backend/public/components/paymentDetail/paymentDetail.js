class PaymentDetail {
    //delivery options cost
    static shippingCosts = {
        inStorePickup: 0,
        postOffice: 2.5,
        dhl: 3.5,
    };
    static paymentMethod = "By card";
    static deliveryMethod = "Pick up in the store";
    static selectedShippingCost = PaymentDetail.shippingCosts["inStorePickup"];

    static onDeliveryOptionChanged = (event) => {
        document
            .querySelectorAll(".delivery-checkbox")
            .forEach((c) => (c.checked = false));
        event.checked = true;

        PaymentDetail.deliveryMethod = event.parentElement
            .getElementsByClassName("delivery-label")[0]
            .innerHTML.trim();

        PaymentDetail.selectedShippingCost =
            PaymentDetail.shippingCosts[
                event.parentElement.getElementsByClassName(
                    "delivery-price"
                )[0].id
            ];

        PaymentDetail.calculateSummary();
    };

    static onPaymentOptionChanged = (event) => {
        document
            .querySelectorAll(".payment-checkbox")
            .forEach((c) => (c.checked = false));
        event.checked = true;

        PaymentDetail.paymentMethod = event.parentElement
            .getElementsByClassName("payment-label")[0]
            .innerHTML.trim();
    };

    static onOrderNowClicked = async (event) => {
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

        let user = JSON.parse(
            localStorage.getItem("armyshop_currently_signed_in_user")
        );

        if (!user) {
            user = {
                id: null,
            };
        }

        const cart = JSON.parse(localStorage.getItem("cart"));
        let productIDs = Object.keys(cart);

        let orderedProducts = {};

        for (const key in productIDs)
            orderedProducts[productIDs[key]] = cart[productIDs[key]].count;

        let paymentDetailData = {
            delivery: PaymentDetail.getKeyByValue(
                PaymentDetail.shippingCosts,
                PaymentDetail.selectedShippingCost
            ),
            payment: PaymentDetail.paymentMethod,
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
                    delivery: paymentDetailData.delivery,
                    payment: paymentDetailData.payment,
                    ordered_products: paymentDetailData.ordered_products,
                    first_name: paymentDetailData.first_name,
                    last_name: paymentDetailData.last_name,
                    email: paymentDetailData.email,
                    address: paymentDetailData.address,
                    zip_code: paymentDetailData.zip_code,
                    city: paymentDetailData.city,
                    country: paymentDetailData.country,
                    phone: paymentDetailData.phone,
                }
            );

            console.log(response);

            if (response.status === 200) {
                document.querySelector("#payment-detail form").reset();
                return PaymentDetail.handlePopup();
            }
            if (response.status === 401) {
                PaymentDetailValidator.setError(
                    loginEmail,
                    "Invalid credentials"
                );
                return setError(loginPassword1, "Invalid credentials");
            }
            if (response.status === 422) {
                if (response.errors.email) {
                    PaymentDetailValidator.setError(
                        loginEmail,
                        response.errors.email
                    );
                }
                if (response.errors.password) {
                    PaymentDetailValidator.setError(
                        loginPassword1,
                        response.errors.password
                    );
                }
            }
        }
    };

    static handlePopup = () => {
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

    static calculateSummary() {
        const buyNowCart = JSON.parse(localStorage.getItem("buyNowCart"));
        let subtotal = 0;

        if (buyNowCart) {
            for (let key in buyNowCart)
                subtotal += buyNowCart[key].price * buyNowCart[key].count;

            document.getElementById(`subtotal`).innerText =
                Formatter.formatPrice(subtotal);
            document.getElementById(`shipping`).innerText =
                Formatter.formatPrice(PaymentDetail.selectedShippingCost) +
                ` (${PaymentDetail.deliveryMethod})`;
            document.getElementById(`total`).innerText = Formatter.formatPrice(
                subtotal + PaymentDetail.selectedShippingCost
            );
            return;
        }

        const shoppingCart = JSON.parse(localStorage.getItem("cart"));
        subtotal = 0;
        for (let key in shoppingCart)
            subtotal += shoppingCart[key].price * shoppingCart[key].count;

        document.getElementById(`subtotal`).innerText =
            Formatter.formatPrice(subtotal);
        document.getElementById(`shipping`).innerText =
            Formatter.formatPrice(PaymentDetail.selectedShippingCost) +
            ` (${PaymentDetail.deliveryMethod})`;
        document.getElementById(`total`).innerText = Formatter.formatPrice(
            subtotal + PaymentDetail.selectedShippingCost
        );
    }

    static getKeyByValue(object, value) {
        return Object.keys(object).find((key) => object[key] === value);
    }

    static assignDefaultValues() {
        //do not load data if user is not logged in
        const user = JSON.parse(
            localStorage.getItem("armyshop_currently_signed_in_user")
        );

        //load user data into fields
        if (user?.email)
            document.getElementById("email-input").value = user.email;

        if (user?.phone)
            document.getElementById("telephone-input").value = user.phone;

        if (user?.first_name)
            document.getElementById("first-name-input").value = user.first_name;

        if (user?.last_name)
            document.getElementById("last-name-input").value = user.last_name;

        if (user?.address) {
            let addressFields = user.address.split(",");
            document.getElementById("address-input").value =
                addressFields[0] === "undefined" ? "" : addressFields[0];
            document.getElementById("zip-input").value =
                addressFields[1] === "undefined" ? "" : addressFields[1];
            document.getElementById("city-input").value =
                addressFields[2] === "undefined" ? "" : addressFields[2];
            document.getElementById("country-input").value =
                addressFields[3] === "undefined" ? "" : addressFields[3];
        }

        document.getElementById("inStorePickup").innerText =
            Formatter.formatPrice(PaymentDetail.shippingCosts["inStorePickup"]);
        document.getElementById("postOffice").innerText = Formatter.formatPrice(
            PaymentDetail.shippingCosts["postOffice"]
        );
        document.getElementById("dhl").innerText = Formatter.formatPrice(
            PaymentDetail.shippingCosts["dhl"]
        );

        PaymentDetail.calculateSummary();
    }
}

//load logged in user data
window.addEventListener("load", function () {
    PaymentDetail.assignDefaultValues();
});
