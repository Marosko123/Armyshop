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

window.addEventListener("load", function () {
    //redirect if user is not logged in
    data = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );
    if (data === null || data.role !== "admin") {
        window.location.href = "/";
    } else document.querySelector("body").removeAttribute("hidden");
});
