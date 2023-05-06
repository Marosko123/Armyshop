const productName = document.getElementById('product_name');
let price = document.getElementById('product_price');
const description = document.getElementById('product_description');
const image1 = document.getElementById('product_image1');
const image2 = document.getElementById('product_image2'); 
const licenseNeeded = document.getElementById('license-needed');
const categoryField = document.getElementById('product_category');
const subcategoryField = document.getElementById('product_subcategory');


let productId = window.location.href.split('/').pop();
try { 
    productId = parseFloat(productId);
} catch (e) {
    productId = 0;
}

async function getProductById(productId) {
    console.log(productId);
    const product = await ServerRequester.getFromUrl(`/products/${productId}`);
    return product;
}

function fillForm(product) {
    product = product.product;
    productName.value = product.name;
    price.value = product.price;
    description.value = product.description;
    const images = product.image_url.split(' ');
    image1.value = images[0];
    if (images.length > 1) {
        image2.value = images[1];
    }
    const subcategoryId = product.subcategory_id;
    const subcategory = SubcategoriesMap.fromId(subcategoryId).name;
    const category = SubcategoriesMap.fromId(subcategoryId).parent;
    const subcategories = SubcategoriesMap.getSubcategoriesFromId(subcategoryId);
    const categories = SubcategoriesMap.getCategories();
    console.log(subcategories);
    console.log(categories);
    subcategoryField.innerHTML = ''; // Clear the subcategory select element
    categoryField.innerHTML = ''; // Clear the category select element
    categoryField.value = category; // Set the selected category value
    subcategoryField.value = subcategory; // Set the selected subcategory value

    // Loop through subcategories and add options to the subcategory select element
    for (let i = 0; i < subcategories.length; i++) {
        const option = `<option value="${subcategories[i]}" ${subcategories[i] === subcategory ? 'selected' : ''}>${subcategories[i]}</option>`;
    subcategoryField.innerHTML += option;
    }

    // Loop through categories and add options to the category select element
    for (let i = 0; i < categories.length; i++) {
        const option = `<option value="${categories[i]}" ${categories[i] === category ? 'selected' : ''}>${categories[i]}</option>`;
        categoryField.innerHTML += option;
    }
    licenseNeeded.checked = product.license_needed;
}

async function loadProduct() {
    const product = await getProductById(productId);
    fillForm(product);
}

loadProduct();

document.getElementById('edit-btn').addEventListener('click', async function (e) {
    e.preventDefault();
    // validate form
    if (!productName.value || !price.value || !description.value || !image1.value) {
        alert('Please fill all fields');
        return;
    }
    const product = {
        name: productName.value,
        price: price.value,
        description: description.value,
        image_url: image1.value + ' ' + image2.value,
        license_needed: licenseNeeded.checked,
        subcategory_id: SubcategoriesMap.getIdFromName(subcategoryField.value)
    };
    console.log(product);
    await ServerRequester.putToUrl(`/products/${productId}`, product)
    .then(data => {
        console.log('Success:', data);
        window.location.href = '/adminDashboard';
    })
    .catch((error) => {
        console.error('Error:', error);
    });
});


const showPreview = (name, image, price) => {
    let html = `<div class="card m-3" style="height:25rem !important;">
            <!-- image source: unsplash.com -->
            <img class="card-img-top"
            src="${image}"
            alt="Card image cap"
            style="height:15rem !important; object-fit:cover !important;">
            <div class="card-body d-flex align-items-center justify-content-between mx-auto">
                <div>
                    <h3 class="card-title">${name}</h3>
                    <p class="card-text">${price} €</p>
                </div>
                <!-- image source: flaticon.com -->
                <img src="http://127.0.0.1:8000/images/productDetailImages/heart4.png" alt="" width="14%" class="liked-photo">
            </div>
                <div class="card-body d-flex align-items-center justify-content-between mx-auto">
                    <!-- image source: flaticon.com -->
                    <img id='cart-button' src="http://127.0.0.1:8000/images/productDetailImages/cart.png" alt="" width="15%" class="cart-img">
                    <button id='buy-now-button' type="button" class="btn btn-success btn-buy">Buy Now</button>
                </div>
        </div>`;
    const preview = document.getElementById('preview');
    const previewBg = document.getElementById('preview-bg');
    previewBg.classList.toggle('preview-container');
    if (preview.innerHTML !== '') {
        preview.innerHTML = '';
        return;
    } else {
        preview.innerHTML = html;
    }
}


const previewBtn = document.getElementById('preview-btn');
previewBtn.addEventListener('click', (e) => {
    e.preventDefault();
    const name = document.getElementById('product_name').value;
    const price = document.getElementById('product_price').value;
    const image1 = document.getElementById('product_image1').value ?? "";
    showPreview(name, image1, price)
});
