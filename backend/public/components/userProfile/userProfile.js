//make order history visible 
const orderHistoryBtn = document.getElementById('order-history-btn');
const historyContainer = document.getElementById('orderHistoryContainer');

orderHistoryBtn.addEventListener('click', function () {
  if (historyContainer.style.display === 'none' || historyContainer.style.display=="") {
    historyContainer.style.display = 'block';
  } else {
    historyContainer.style.display = 'none';
  }
});

//make wish list visible 
const wishListBtn = document.getElementById('wish-list-btn');
const wishListContainer = document.getElementById('wishListContainer');

wishListBtn.addEventListener('click', function () {
  if (wishListContainer.style.display === 'none' || wishListContainer.style.display=="") {
    wishListContainer.style.display = 'block';
  } else {
    wishListContainer.style.display = 'none';
  }
});

//log-out handling
const logoutButton = document.getElementById('log-out-btn');

logoutButton.addEventListener('click', function() {
  localStorage.removeItem('armyshop_currently_signed_in_user');
  window.location.href = "/";
  console.log("User logged-out");
});

window.addEventListener('load', function() {
  //redirect if user is not logged in
  data = JSON.parse(localStorage.getItem("armyshop_currently_signed_in_user"));
  if (data === null) 
    window.location.href = '/login';
  else
    document.querySelector('body').removeAttribute('hidden');

  //load user data into fields
  console.log(data);

  if(data.name)
    document.getElementById('name').setAttribute("value", data.name);

  if(data.email)
    document.getElementById('email').setAttribute("value", data.email);

  if(data.phone)
    document.getElementById('email').setAttribute("value", data.phone);

  nameInput = document.getElementById('name');
  if(data.first_name)
    nameInput.setAttribute("value", data.first_name + " ");

  if(data.last_name)
    nameInput.setAttribute("value", (nameInput.getAttribute("value") == null ? "": nameInput.getAttribute("value")) + data.last_name);

  if(data.address){
    addressFields = data.address.split(",");
    document.getElementById('address').setAttribute("value", addressFields[0]);
    document.getElementById('zip-code').setAttribute("value", addressFields[1]);
    document.getElementById('city').setAttribute("value", addressFields[2]);
    document.getElementById('country').setAttribute("value", addressFields[3]);
  }
    
});