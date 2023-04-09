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
	<header>
		<div id="navbar">
			<div class="text-center">
			<!-- primary navbar -->
			<nav id="primary-navbar" class="navbar navbar-expand navbar-light bg-light">
				<div class="container-fluid">
					<a href="#" target="_blank">
					<!-- custom image -->
						<img class="navbar-img" 
							src="{{ asset('images/logo/logoTransparent.png') }}" 
							alt="Armyshop">
					</a>
					<div class="search-input-wrapper">
						<input class="form-control search-input" type="search" placeholder="Search" aria-label="Search" onchange="onSearchInputChanged(this)">
						<div id="search-results-wrapper"></div>
					</div>
					<!-- image source: freeiconspng.com -->
					<img class="search-img" 
						src="https://www.freeiconspng.com/uploads/search-icon-png-5.png" 
						alt="Responsive image">
					<button class="button shopping-cart__button" onclick="onShoppingCartClicked()">
					<!-- image source: freeiconspng.com -->
						<img class="navbar-img" 
							src="https://www.freeiconspng.com/uploads/bag-icon-6.png" 
							alt="Responsive image">
					</button>
					<button class="button profile__button" onclick="onProfileClicked()">
					<!-- image source: freeiconspng.com -->
						<img class="navbar-img" 
							src="https://www.freeiconspng.com/uploads/msn-people-person-profile-user-icon--icon-search-engine-16.png" 
							alt="Responsive image">
					</button>
				</div>
			</nav>

			<!-- secondary navbar -->
			<nav id="secondary-navbar" class="navbar navbar-expand navbar-light bg-light">
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<div onclick="onCategoryClicked('weapons')">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton"
								data-mdb-toggle="dropdown"
								aria-expanded="false">
								Weapons
							</button>
						</div>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('weapons', 'pistols')">Pistols</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('weapons', 'rifles')">Rifles</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('weapons', 'submachine_guns')">Submachine guns</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('weapons', 'heavy')">Heavy</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('weapons', 'knives')">Knives</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<div onclick="onCategoryClicked('transport')">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton"
								data-mdb-toggle="dropdown"
								aria-expanded="false">
								Transport
							</button>
						</div>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('transport', 'cars')">Cars</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('transport', 'motocycles')">Motocycles</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('transport', 'panzers')">Panzers</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('transport', 'planes')">Planes</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('transport', 'boats')">Boats</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<div onclick="onCategoryClicked('clothing')">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton"
								data-mdb-toggle="dropdown"
								aria-expanded="false">
								Clothing
							</button>
						</div>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('clothing','jackets')">Jackets</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('clothing','shirts')">Shirts</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('clothing','pants')">Pants</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('clothing','shoes')">Shoes</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('clothing','socks')">Socks</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<div onclick="onCategoryClicked('explosives')">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton"
								data-mdb-toggle="dropdown"
								aria-expanded="false">
								Explosives
							</button>
						</div>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('explosives', 'c4s')">C4s</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('explosives', 'nukes')">Nukes</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('explosives', 'grenades')">Grenades</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('explosives', 'tnts')">TNTs</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('explosives', 'bombs')">Bombs</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<div onclick="onCategoryClicked('equipment')">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton"
								data-mdb-toggle="dropdown"
								aria-expanded="false">
								Equipment
							</button>
						</div>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('equipment', 'backpacks')">Backpacks</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('equipment', 'hunting')">Hunting</a></li>
							<li><a class="dropdown-item" onclick="onSubCategoryClicked('equipment', 'camping')">Camping</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<div onclick="onCategoryClicked('accessories')">
							<button
								class="btn dropdown-toggle"
								type="button"
								id="dropdownMenuButton"
								data-mdb-toggle="dropdown"
								aria-expanded="false">
								Accessories
							</button>
						</div>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<li><a class="dropdown-item" onclick="onSubCategoryClicked('accessories', 'glasses')">Glasses</a></li>
						<li><a class="dropdown-item" onclick="onSubCategoryClicked('accessories', 'face_paint')">Face pain</a></li>
						<li><a class="dropdown-item" onclick="onSubCategoryClicked('accessories', 'camouflage')">Camouflage</a></li>
						</ul>
					</div>
				</div>
			</nav>
			</div>
		</div>
	</header>

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

	<!-- contact us -->
	<footer>
		<div id="contact-us" class="text-center mt-5">
		<div class="contact-us-wrapper">
			<div class="contact-us-column">
			<h1>Contact us</h1>
			<p>Phone: +421 9xx xxx xxx</p>
			<p>Email: info@armyshop.xd</p>
			</div>
			<div class="contact-us-column">
			<a href="#" target="_blank">
				<!-- custom image -->
				<img class="contact-us-logo" 
				src="{{ asset('images/logo/logoTransparent.png') }}" 
				alt="Armyshop">
			</a>
			<div class="contact-us-social-media">
				<div>
				<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley" class="social-media-link" target="_blank">
					<!-- image source: freepik.com -->
					<img src="https://cdn.aboutstatic.com/file/d473bb55bdf6bd6430eeff7ed35fa4ca.png?quality=75&amp;height=480&amp;width=360" alt="media" class="social-media-img">
				</a>
				<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley" class="social-media-link" target="_blank">
					<!-- image source: freepik.com -->
					<img src="https://cdn.aboutstatic.com/file/6a522d45a858eea2ccf7e71c2aa419fb.png?quality=75&amp;height=480&amp;width=360" alt="media" class="social-media-img">
				</a>
				<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley" class="social-media-link" target="_blank">
					<!-- image source: freepik.com -->
					<img src="https://cdn.aboutstatic.com/file/75356ec63103aca8bf43a3071ed2a242.png?quality=75&height=75&width=75" alt="media" class="social-media-img">
				</a>
				</div>
			</div>
			</div>
		</div>
		</div>
	</footer>

	<script src="{{ asset('components/landingPage/landingPage.js') }}"></script>
	<script src="{{ asset('components/navbar/navbar.js') }}"></script>
	<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
</body>
</html>
