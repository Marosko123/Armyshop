<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Army Shop Landing Page</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('components/landingPage/landingPage.css') }}">
<link rel="stylesheet" href="{{ asset('components/categories/categories.css') }}">
<link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('components/contactUs/contactUs.css') }}">
<link rel="stylesheet" href="{{ asset('components/products/products.css') }}">
</head>
<body>
	<!-- navbar -->
    @include('components.navbar')

	<main>
		<!-- landing page -->
		<div id="landing-page">
			<!-- categories -->
			<div id="categories">
				<div class="container">
				<h1 class="main-heading mt-5 display-1">Welcome to our ArmyShop</h1>
				<div class="categories mt-5">
					<div class="row justify-content-center">
						<div class="col-sm-4 col-8 mb-4" >
							<div class="category mx-auto" onclick="onCategoryClicked('weapons')">
							<div class="category-icon mb-3 mt-3">
								<!-- image source: flaticon.com -->
								<img src="{{ asset('images/productDetailImages/gun-pistol-icon.png') }}" alt="hello">
							</div>
							<p class="description">Weapons</p>
							</div>
						</div>
						<div class="col-sm-4 col-8 mb-4">
							<div class="category mx-auto" onclick="onCategoryClicked('transport')">
							<div class="category-icon mb-3 mt-4">
								<!-- image source: flaticon.com -->
								<img src="{{ asset('images/productDetailImages/tank.png') }}" alt="hello">
							</div>
							<p class="description">Transport</p>
							</div>
						</div>
						<div class="col-sm-4 col-8 mb-4">
							<div class="category mx-auto" onclick="onCategoryClicked('clothing')">
							<div class="category-icon mb-2 mt-4">
								<!-- image source: flaticon.com -->
								<img src="{{ asset('images/productDetailImages/tshirt.png') }}" alt="hello">
							</div>
							<p class="description">Clothing</p>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-8 mb-4">
							<div class="category mx-auto" onclick="onCategoryClicked('explosives')">
							<div class="category-icon mt-1 mb-2">
								<!-- image source: flaticon.com -->
								<img src="{{ asset('images/productDetailImages/bomb.png') }}" alt="hello">
							</div>
							<p class="description">Explosives</p>
							</div>
						</div>
						<div class="col-sm-4 col-8 mb-4">
							<div class="category mx-auto" onclick="onCategoryClicked('equipment')">
							<div class="category-icon">
								<!-- image source: flaticon.com -->
								<img src="{{ asset('images/productDetailImages/backpack.png') }}" alt="hello">
							</div>
							<p class="description">Equipment</p>
							</div>
						</div>
						<div class="col-sm-4 col-8 mb-4">
							<div class="category mx-auto" onclick="onCategoryClicked('accessories')">
							<div class="category-icon mb-2 mt-1">
								<!-- image source: flaticon.com -->
								<img src="{{ asset('images/productDetailImages/dog-tag.png') }}" alt="hello">
							</div>
							<p class="description">Accessories</p>
							</div>
						</div>
					</div>
				</div>

				<section id="most-popular">
					<h1 class="main-heading mt-5 display-1">Most Popular</h1>
					<div class="card-container">
					<div class="card m-3">
						<!-- image source: unsplash.com -->
						<img class="card-img-top" src="{{ asset('images/productDetailImages/ak47-1.jpg') }}" alt="Card image cap" onclick="toggleLikedIcon()">
						<div class="card-body d-flex align-items-center justify-content-between mx-auto">
							<div>
								<h3 class="card-title">AK-47</h3>
								<p class="card-text">5999.99 €</p>
							</div>
							<!-- image source: flaticon.com -->
							<img src="{{ asset('images/productDetailImages/heart4.png') }}" alt="" width="14%" class="liked-photo">
						</div>
						<div class="card-body d-flex align-items-center justify-content-between mx-auto">
							<!-- image source: flaticon.com -->
							<img src="{{ asset('images/productDetailImages/cart.png') }}" alt="" width="15%" class="cart-img">
							<button type="button" class="btn btn-success btn-buy">Buy Now</button>
						</div>
					</div>

					<div class="card m-3">
						<!-- image source: unsplash.com -->
						<img class="card-img-top" src="{{ asset('images/productDetailImages/ak47-1.jpg') }}" alt="Card image cap">
						<div class="card-body d-flex align-items-center justify-content-between mx-auto">
							<div>
								<h3 class="card-title">AK-47</h3>
								<p class="card-text">5999.99 €</p>
							</div>
							<!-- image source: flaticon.com -->
							<img src="{{ asset('images/productDetailImages/heart4.png') }}" alt="" width="14%" class="liked-photo">
						</div>
						<div class="card-body d-flex align-items-center justify-content-between mx-auto">
							<!-- image source: flaticon.com -->
							<img src="{{ asset('images/productDetailImages/cart.png') }}" alt="" width="15%" class="cart-img">
							<button type="button" class="btn btn-success btn-buy">Buy Now</button>
						</div>
					</div>

					<div class="card m-3">
						<!-- image source: unsplash.com -->
						<img class="card-img-top" src="{{ asset('images/productDetailImages/ak47-1.jpg') }}" alt="Card image cap">
						<div class="card-body d-flex align-items-center justify-content-between mx-auto">
							<div>
								<h3 class="card-title">AK-47</h3>
								<p class="card-text">5999.99 €</p>
							</div>
							<!-- image source: flaticon.com -->
							<img src="{{ asset('images/productDetailImages/heart4.png') }}" alt="" width="14%" class="liked-photo">
						</div>
						<div class="card-body d-flex align-items-center justify-content-between mx-auto">
							<!-- image source: flaticon.com -->
							<img src="{{ asset('images/productDetailImages/cart.png') }}" alt="" width="15%" class="cart-img">
							<button type="button" class="btn btn-success btn-buy">Buy Now</button>
						</div>
					</div>
				</div>
				</section>
			</div>
			</div>
		</div>
	</main>

	<!-- contact us -->
  @include('components.contactUs')

    <script src="{{ asset('js/subcategoriesMap.js') }}"></script>
    <script src="{{ asset('js/serverRequester.js') }}"></script>
	<script src="{{ asset('components/landingPage/landingPage.js') }}"></script>
	<script src="{{ asset('components/navbar/navbar.js') }}"></script>
	<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
</body>
</html>
