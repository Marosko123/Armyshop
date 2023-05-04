window.onload = function () {
  let items = document.querySelectorAll('.item');
    for (let item of items) {
      let editButton = item.querySelectorAll('.edit-button')[0];

      editButton.addEventListener('click', () => {
          window.location.href = `/editProduct/${item.getAttribute("product-id")}`;
      });

      let removeButton = item.querySelectorAll('.remove-button')[0];

      removeButton.addEventListener('click', () => {
        if (!confirm("Do you really want to remove this product?")) return;
        console.log(`remove product - ${item.getAttribute("product-id")}`)
        
          fetch(`/api/products/delete/${item.getAttribute("product-id")}`, {
              method: 'DELETE',
              headers: {
                  'Content-Type': 'application/json'
              }
          })
          .then(response => response.json())
          .catch(error => console.error(error));
          
          item.remove();
        });
    }
}