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
<link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('components/contactUs/contactUs.css') }}">
<link rel="stylesheet" href="{{ asset('components/loginAndRegisterMenu/loginAndRegisterMenu.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('components/common/styles.css') }}"> -->

</head>

<body>
	<!-- navbar -->
    @include('components.navbar')

	<main>
		<!-- products -->
		<div id="products" class="container">
			<div class="subcategories mt-3">
				
			</div>

			<!-- filters -->
			<div id="filters">
			<div class="slider-order d-flex justify-content-between mx-auto" style="width:80% !important;">
        <div class="col-lg-3 col-6 mb-3 mb-md-0">
            <section class="range-slider">
                <p class="order-description">0 € - 99999 €</p>
                <input value="80000" min="0" max="99999" step="10" type="range" class="slider-input">
                <input value="10000" min="0" max="99999" step="10" type="range" class="slider-input">
            </section>
        </div>
        <div class="col-lg-3 col-6 mb-3 mb-md-0">
            <div class="license-needed d-flex mt-3">
                <p class="order-description toggle-license" style="margin-left: 3rem; margin-top: 3px; font-size:1rem;" onclick="toggleCheckmark()">License:</p>
                <img src="{{ asset('images/productDetailImages/checkmark.png') }}" alt="" width="10%" height="30%"
                    class="checkmark-img checkmark" id="license-checkmark">
            </div>
        </div>
        <div class="col-lg-3 col-6 mb-3 mb-md-0">
            <div class="dropdown-orderby">
                <button class="dropbtn rounded mx-auto">Order By</button>
                <div class="dropdown-content">
                    <a href="#" class="asc">Price Increasing</a>
                    <a href="#" class="desc">Price Decreasing</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 mb-3 mb-md-0">
            <div class="apply-filters justify-content-between">
                <button class="apply-filters-btn rounded" id="apply-button">Apply</button>
                <button class="reset-filters-btn rounded" style="margin-left:3rem;">Reset</button>
            </div>

        </div>
    </div>
		</div>

		<!-- cards -->
		<div id="cards" class="card-container"></div>

		<!-- paging -->
		<div class="pagination-container">
			<ul class="pagination">
				<li><a id="page-prev" class="disabled-page">Previous</a></li>
				<li><a href="#" id="page1">1</a></li>
				<li><a href="#" id="page2">2</a></li>
				<li><a href="#" id="page3">3</a></li>
				<li><a id="page-next">Next</a></li>
			</ul>
		</div>
	</main>

	<!-- contact us -->
  @include('components.contactUs')

<script src="{{ asset('components/products/products.js') }}"></script>
<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
</body>

</html>