<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Product</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('components/contactUs/contactUs.css') }}">
<link rel="stylesheet" href="{{ asset('components/addProduct/addProduct.css') }}">
<link rel="stylesheet" href="{{ asset('components/loginAndRegisterMenu/loginAndRegisterMenu.css') }}">
</head>
<body hidden>
	<!-- navbar -->
    @include('components.navbar')

	<main>
	<div class="container">
		<h1 class="mt-5">Edit Product</h1>
		<form action="" method="GET">
			<div class="form-group mt-3">
				<label for="product_name">Product Name</label>
				<input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product name..." required>
			</div>
			<div class="form-group mt-3">
				<label for="product_price">Price</label>
				<input type="number" step="0.01" class="form-control" id="product_price" name="product_price" placeholder="Product price..." required>
			</div>
			<div class="form-group mt-3">
				<label for="product_description">Description</label>
				<textarea class="form-control" id="product_description" name="product_description" placeholder="Add Description..." required></textarea>
			</div>
			<!-- <div class="form-group mt-3">
				<label for="product_images">Images</label>
				<input type="file" class="form-control-file" id="product_images" name="product_images[]" multiple required>
			</div> -->
			<div class="form-group mt-3">
				<label for="product_image1">Image 1</label>
				<input type="text" class="form-control" id="product_image1" name="product_image1" placeholder="Product image URL..." required>
			</div>
			<div class="form-group mt-3">
				<label for="product_image2">Image 2</label>
				<input type="text" class="form-control" id="product_image2" name="product_image2" placeholder="Product image URL...">
			</div>
			<div class="form-group mt-3">
				<label for="product_category">Category</label>
				<select class="form-control" id="product_category" name="product_category" required>
					<option value="Weapons" class="cat-option">Weapons</option>
					<option value="Transport" class="cat-option">Transport</option>
					<option value="Clothing" class="cat-option">Clothing</option>
					<option value="Explosives" class="cat-option">Explosives</option>
					<option value="Equipment" class="cat-option">Equipment</option>
					<option value="Accessories" class="cat-option">Accessories</option>
				</select>
			</div>
			<div class="form-group mt-3">
				<label for="product_subcategory">Subcategory</label>
				<select class="form-control" id="product_subcategory" name="product_subcategory" required>
					<option value="Pistols">Pistols</option>
					<option value="Rifles">Rifles</option>
					<option value="SMGs">SMGs</option>
					<option value="Heavy">Heavy</option>
					<option value="Knives">Knives</option>
				</select>
			</div>
			<div class="form-check mt-3">
				<input class="form-check-input" type="checkbox" id="license-needed" name="license_needed">
				<label class="form-check-label" for="license-needed">
					License Needed
				</label>
			</div>

			<button class="btn btn-primary mt-3" id="preview-btn">Show Preview</button>

			<div id="preview-bg">
				<div id="preview"></div>
			</div>
			
			<button class="btn btn-success mt-3" id="edit-btn">Apply Changes</button>
			<div>
				<p id="error-message"></p>
			</div>
		</form>
		</div>
	</main>

	<!-- contact us -->
  @include('components.contactUs')

	
	<!-- <script src="{{ asset('components/addProduct/addProduct.js') }}"></script> -->
	<script src="{{ asset('components/editProduct/editProduct.js') }}"></script>
	<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
</body>
</html>
