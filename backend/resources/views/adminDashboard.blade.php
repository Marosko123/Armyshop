<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Products</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- <link rel="stylesheet" type="text/css" href="products.css">
<link rel="stylesheet" href="../navbar/navbar.css">
<link rel="stylesheet" href="../contactUs/contactUs.css">
<link rel="stylesheet" href="../../common/styles.css"> -->

<link rel="stylesheet" href="{{ asset('components/products/products.css') }}">
<link rel="stylesheet" href="{{ asset('components/adminPanel/adminDashboard.css') }}">
<link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('components/contactUs/contactUs.css') }}">
<link rel="stylesheet" href="{{ asset('components/loginAndRegisterMenu/loginAndRegisterMenu.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('components/common/styles.css') }}"> -->

</head>

<body>
	<!-- navbar -->
    @include('components.navbar')

	<main>
    <div class="container">
		<h1 class="text-center mt-5 heading">Admin Panel</h1>
		<div class="row mt-5 text-center">
			<div class="col-3 mb-3 mx-auto">
				<a href="#" class="btn btn-success btn-lg btn-block" id="addBtn">Add a Product</a>
			</div>

			<div class="col-3 mb-3 mx-auto">
				<a href="#" class="btn btn-warning btn-lg btn-block" id="editBtn">Edit Products</a>
			</div>

            <div class="col-3 mb-3 mx-auto">
                <a href="#" class="btn btn-primary btn-lg btn-block" id="viewBtn">View Products</a>
            </div>
		</div>
	</div>
	</main>

	<!-- contact us -->
  @include('components.contactUs')

<script src="{{ asset('components/adminPanel/adminDashboard.js') }}"></script>
<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
</body>

</html>