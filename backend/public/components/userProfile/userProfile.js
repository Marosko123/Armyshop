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