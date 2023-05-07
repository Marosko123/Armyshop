window.onload = async function () {
  //redirect if user is not logged in
  data = JSON.parse(
      localStorage.getItem("armyshop_currently_signed_in_user")
  );
  if (data === null || data.role !== "admin") {
      window.location.href = "/";
  } else document.querySelector("body").removeAttribute("hidden");

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