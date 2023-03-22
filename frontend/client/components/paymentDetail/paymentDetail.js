console.log('test');

onDeliveryOptionChanged = (event) => {
	document.querySelectorAll('.delivery-checkbox').forEach((c) => (c.checked = false));
	event.checked = true;
};
