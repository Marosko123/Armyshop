console.log("test");

onDeliveryOptionChanged = (event) => {
    document
        .querySelectorAll(".delivery-checkbox")
        .forEach((c) => (c.checked = false));
    event.checked = true;
};

onPaymentOptionChanged = (event) => {
    document
        .querySelectorAll(".payment-checkbox")
        .forEach((c) => (c.checked = false));
    event.checked = true;
};

onOrderNowClicked = (event) => {
    document
        .querySelectorAll(".payment-checkbox")
        .forEach((c) => (c.checked = false));
    event.checked = true;
};
