document.getElementById('addBtn').addEventListener('click', () => {
    // redirect to add product page
    window.location.href = "/addProduct";
})

document.getElementById('editBtn').addEventListener('click', () => {
    // redirect to edit product page
    window.location.href = "/editProducts";
})

document.getElementById('viewBtn').addEventListener('click', () => {
    // redirect to view product page
    window.location.href = "/products";
})