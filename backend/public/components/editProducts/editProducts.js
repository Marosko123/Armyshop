window.onload = async function () {
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
        
        deleteFromDB(item);
          
        item.remove();
      });
    }
}

async function deleteFromDB(item){
  await ServerRequester.deleteFromUrl(`/products/delete/${item.getAttribute("product-id")}`);
}