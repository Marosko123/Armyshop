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

wishListBtn.addEventListener("click", function () {
    if (
        wishListContainer.style.display === "none" ||
        wishListContainer.style.display == ""
    ) {
        wishListContainer.style.display = "block";
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
        document.getElementById("address").value = addressFields[0] == 'undefined' ? '' : addressFields[0];
        document.getElementById("zip-code").value = addressFields[1] == 'undefined' ? '' : addressFields[1];
        document.getElementById("city").value = addressFields[2] == 'undefined' ? '' : addressFields[2];
        document.getElementById("country").value = addressFields[3] == 'undefined' ? '' : addressFields[3];
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
    "address": address,
    "phone": document.getElementById('phone').value
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
