//make order history visible 
const orderHistoryBtn = document.getElementById('order-history-btn');
const historyContainer = document.getElementById('orderHistoryContainer');

orderHistoryBtn.addEventListener('click', function () {
  if (historyContainer.style.display === 'none') {
    historyContainer.style.display = 'block';
  } else {
    historyContainer.style.display = 'none';
  }
});

//make wish list visible 
const wishListBtn = document.getElementById('wish-list-btn');
const wishListContainer = document.getElementById('wishListContainer');

wishListBtn.addEventListener('click', function () {
  if (wishListContainer.style.display === 'none') {
    wishListContainer.style.display = 'block';
  } else {
    wishListContainer.style.display = 'none';
  }
});

//handle billing information save changes 
const saveBtn = document.getElementById('save-changes-btn');

saveBtn.addEventListener('click', function() {
  const inputs = document.querySelectorAll('input');
  for (let i = 0; i < inputs.length; i++) {
    const input = inputs[i];
    if (input.checkValidity() === false) {
      console.log('invalid')
      input.classList.add('invalid');
    } else {
      console.log('not invalid')
      input.classList.remove('invalid');
    }
  }
});

//handle password change 
const changePassBtn = document.getElementById('change-password-btn');

changePassBtn.addEventListener('click', function () {
  //validate fields, create json if valid
  console.log("changePassBtn clicked");
});

//handle log out 
const logOutBtn = document.getElementById('log-out-btn');

logOutBtn.addEventListener('click', function () {
  //log out user
  console.log("logOutBtn clicked");
});