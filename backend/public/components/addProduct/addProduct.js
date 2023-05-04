
const categorySelect = document.getElementById('product_category');
const subcategorySelect = document.getElementById('product_subcategory');
const errorMsg = document.getElementById('error-message');

categorySelect.addEventListener('change', () => {
    const selectedCategory = categorySelect.value;
    const subcategories = SubcategoriesMap.getSubcategories(selectedCategory);
    subcategorySelect.innerHTML = '';
    subcategories.forEach(subcategory => {
      subcategorySelect.innerHTML += `<option value=${subcategory}>${subcategory}</option>`;
    });
});

const validateForm = (name, subcategory, price, description, image) => {
        try {
            price = parseFloat(price);
        } catch (e) {
            errorMsg.innerHTML = 'Price must be a number';
            return;
        }
        // Validation
        if (!name || !subcategory || !price || !description || !image) {
            errorMsg.innerHTML = 'Please fill in all fields';
            return;
        }
        if (isNaN(price)) {
            errorMsg.innerHTML = 'Price must be a number';
            return;
        }
        if (price < 0) {
            errorMsg.innerHTML = 'Price must be a positive number';
            return;
        }
        if (price > 100000000) {
            errorMsg.innerHTML = 'Price must be less than 100,000,000';
            return;
        }
        if (description.length > 300) {
            errorMsg.innerHTML = 'Description must be less than 1000 characters';
            return;
        }
        if (image.length > 500) {
            errorMsg.innerHTML = 'Image URL must be less than 500 characters';
            return;
        }
        errorMsg.innerHTML = '';
}


const submitButton = document.getElementById('add-btn');
submitButton.addEventListener('click', (e) => {
    e.preventDefault();
    const name = document.getElementById('product_name').value;
    const subcategory = subcategorySelect.value;
    let price = document.getElementById('product_price').value;
    const description = document.getElementById('product_description').value;
    const image1 = document.getElementById('product_image1').value ?? "";
    const image2 = document.getElementById('product_image2').value ?? "";   
    const subcategoryId = SubcategoriesMap.getIdFromName(subcategory);
    const licenseNeeded = document.getElementById('license-needed').checked;

    const image = image1 + (image2 ? " " + image2 : "");

    validateForm(name, subcategory, price, description, image1, image2);

    if (errorMsg.innerHTML !== '') {
        return;
    }

    price = parseFloat(price);

    let product = {
        name: name,
        price: price,
        description: description,
        image_url: image,
        subcategory_id: subcategoryId,
        license_needed: licenseNeeded,
    };
    ServerRequester.postToUrl('/products/create', product)
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