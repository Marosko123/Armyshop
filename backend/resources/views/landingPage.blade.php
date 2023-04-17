<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Army Shop Landing Page</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('components/landingPage/landingPage.css') }}">
<link rel="stylesheet" href="{{ asset('components/categories/categories.css') }}">
<link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('components/contactUs/contactUs.css') }}">
<link rel="stylesheet" href="{{ asset('components/products/products.css') }}">
<link rel="stylesheet" href="{{ asset('components/loginAndRegisterMenu/loginAndRegisterMenu.css') }}">
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
				<h1 class="main-heading mt-5 display-1">Welcome to ArmyShop</h1>
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
					
				</section>
			</div>
			</div>
		</div>
	</main>

	<!-- contact us -->
  @include('components.contactUs')
</body>
</html>
