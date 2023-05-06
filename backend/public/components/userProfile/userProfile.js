//make order history visible
const orderHistoryBtn = document.getElementById("order-history-btn");
const historyContainer = document.getElementById("orderHistoryContainer");

orderHistoryBtn.addEventListener("click", function () {
    if (
        historyContainer.style.display === "none" ||
        historyContainer.style.display == ""
    ) {
        historyContainer.style.display = "block";
    } else {
        historyContainer.style.display = "none";
    }
});

//make wish list visible
const wishListBtn = document.getElementById("wish-list-btn");
const wishListContainer = document.getElementById("wishListContainer");

wishListBtn.addEventListener("click", async function () {
    if (
        wishListContainer.style.display === "none" ||
        wishListContainer.style.display == ""
    ) {
        wishListContainer.style.display = "block";
        // Build the HTML string for the wishlist
        let wishlistHTML = "<table>";
        
        const likedIds = await getLikedProducts();
        console.log(likedIds);
        const productsToDisplay = GlobalVariables.products.filter(product => likedIds.includes(product.id));
        console.log(productsToDisplay);
        if (productsToDisplay.length == 0) {
            wishlistHTML += "<tr><td>Your wishlist is empty.</td></tr>";
        }
        
        productsToDisplay.forEach(product => {
            wishlistHTML += `
                <tr class="wishListRow">
                <td>
                    <img class="productImg" src="${product.image_url}">
                </td>
                <td>${product.name}</td>
                <td class="wishListPrice">${product.price}</td>
                </tr>
            `;
        });
        
        wishlistHTML += "</table>";
        
        wishListContainer.innerHTML = wishlistHTML;
    } else {
        wishListContainer.style.display = "none";
    }
});

//log-out handling
const logoutButton = document.getElementById("log-out-btn");

logoutButton.addEventListener('click', function () {
  localStorage.removeItem('armyshop_currently_signed_in_user');
  localStorage.removeItem('cart');
  localStorage.removeItem("buyNowCart");
  window.location.href = "/";
  console.log("User logged-out");
});

window.addEventListener("load", function () {
    //redirect if user is not logged in
    data = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );
    if (data === null) {
        createPopup();
        displayLoginMenu();
    } else document.querySelector("body").removeAttribute("hidden");

    //load user data into fields
    if (data.email) document.getElementById("email").value = data.email;

    if (data.phone) document.getElementById("phone").value = data.phone;

    nameInput = document.getElementById("name");
    if (data.first_name) nameInput.value = data.first_name + " ";
    if (data.last_name)
        nameInput.value =
            (nameInput.value == null ? "" : nameInput.value) + data.last_name;

    if (data.address) {
        addressFields = data.address.split(",");
        document.getElementById("address").value = addressFields[0];
        document.getElementById("zip-code").value = addressFields[1];
        document.getElementById("city").value = addressFields[2];
        document.getElementById("country").value = addressFields[3];
    }
});

//save changes
const saveChangesButton = document.getElementById("save-changes-btn");

saveChangesButton.addEventListener("click", async function () {
    oldData = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );

    //add validation
    //


  address = document.getElementById('address').value +","+
            document.getElementById('zip-code').value +","+
            document.getElementById('city').value +","+
            document.getElementById('country').value;
  
  data = {
    "id":oldData.id,
    "first_name": document.getElementById('name').value.split(" ")[0],
    "last_name": document.getElementById('name').value.split(" ")[1],
     "email" : document.getElementById('email').value,
    "address": address
  };

  localStorage.setItem("armyshop_currently_signed_in_user",JSON.stringify(data));

  if(oldData.email == document.getElementById('email').value) 
    delete data["email"];

  fetch(`/api/users/update/${data.id}`, {
      method: 'PUT',
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
  })
  .then(response => response.json())
  .then(data => console.log(data))
  .catch(error => console.error(error));
  
   alert("Changes saved.");

});

async function getLikedProducts() {
data = JSON.parse(
        localStorage.getItem("armyshop_currently_signed_in_user")
    );
if (data === null || data.id < 1) {
    alert("You must be logged in to view your wishlist.");
    return;
}
const response = await ServerRequester.getFromUrl(`/liked_products/${data.id}`)
if (response.status === 200) {
    likedArray = response.products.map(product => product.product_id);
} else {
    likedArray = [];
}
console.log(likedArray);
return likedArray;
}
  
