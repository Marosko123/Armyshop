<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Products</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<!-- <link rel="stylesheet" type="text/css" href="products.css">
<link rel="stylesheet" href="../navbar/navbar.css">
<link rel="stylesheet" href="../contactUs/contactUs.css">
<link rel="stylesheet" href="../../common/styles.css"> -->


<link rel="stylesheet" href="{{ asset('components/products/products.css') }}">
<link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('components/contactUs/contactUs.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('components/common/styles.css') }}"> -->

</head>

<body>
	<!-- navbar -->
	<header>
		<div id="navbar">
			<div class="text-center">
			<!-- primary navbar -->
			<nav id="primary-navbar" class="navbar navbar-expand navbar-light bg-light">
				<div class="container-fluid">
					<a href="" target="_blank" onclick="onLogoClicked()">
					<!-- custom image -->
						<img class="navbar-img" 
							src="{{ asset('images/logo/logoTransparent.png') }}" 
							alt="Armyshop">
					</a>
					<div class="search-input-wrapper">
						<input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
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

	<main>
		<!-- products -->
		<div id="products" class="container">
			<div class="subcategories">
				<div class="subcategory" onclick="onCategoryClicked('pistols')">
					<h3 class="description">Pistols</h3>
				</div>
				<div class="subcategory" onclick="onCategoryClicked('rifles')">
					<h3 class="description">Rifles</h3>
				</div>
				<div class="subcategory" onclick="onCategoryClicked('smgs')">
					<h3 class="description">SMG</h3>
				</div>
				<div class="subcategory" onclick="onCategoryClicked('heavy')">
					<h3 class="description">Heavy</h3>
				</div>
				<div class="subcategory" onclick="onCategoryClicked('knives')">
					<h3 class="description">Knives</h3>
				</div>
			</div>

			<!-- filters -->
			<div id="filters">
			<div class="slider-order d-flex justify-content-between mx-auto">
				<div class="slider-container">
				<p class="order-description">0 € - 999999 €</p>
				<div class="slider">
					<input type="range" min="0" max="1000" value="0" class="slider-range" id="myRange1">
					<input type="range" min="1000" max="50000" step="1000" value="50000" class="slider-range" id="myRange2">
				</div>
				</div>

				<div class="license-needed d-flex mt-3">
				<p class="order-description toggle-license">License:</p>
				<!-- image source: freeiconspng.com -->
				<img src="{{ asset('images/productDetailImages/checkmark.png') }}" alt="" width="10%" height="30%"
					class="checkmark-img checkmark" id="license-checkmark" onclick="toggleCheckmark(this)">
				</div>

				<div class="dropdown-orderby">
				<button class="dropbtn rounded">Order By</button>
				<div class="dropdown-content">
					<a href="#">Price Increasing</a>
					<a href="#">Price Decreasing</a>
					<a href="#">Popularity</a>
				</div>
				</div>
			</div>
		</div>

		<!-- cards -->
		<div id="cards" class="card-container"></div>

		<!-- paging -->
		<div class="pagination-container">
			<ul class="pagination">
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">Next</a></li>
			</ul>
		</div>
	</main>

	<!-- contact us -->
	<footer>
		<div id="contact-us" class="text-center">
		<div class="contact-us-wrapper">
			<div class="contact-us-column">
			<h1>Contact us</h1>
			<p>Phone: +421 9xx xxx xxx</p>
			<p>Email: info@armyshop.xd</p>
			</div>
			<div class="contact-us-column">
			<a href="/">
				<!-- custom image -->
				<img class="contact-us-logo" src="{{ asset('images/logo/logoTransparent.png') }}" alt="Armyshop">
			</a>
			<div class="contact-us-social-media">
				<div>
				<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley" class="social-media-link"
					target="_blank">
					<!-- image source: freepik.com -->
					<img
					src="https://cdn.aboutstatic.com/file/d473bb55bdf6bd6430eeff7ed35fa4ca.png?quality=75&amp;height=480&amp;width=360"
					alt="media" class="social-media-img">
				</a>
				<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley" class="social-media-link"
					target="_blank">
					<!-- image source: freepik.com -->
					<img
					src="https://cdn.aboutstatic.com/file/6a522d45a858eea2ccf7e71c2aa419fb.png?quality=75&amp;height=480&amp;width=360"
					alt="media" class="social-media-img">
				</a>
				<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley" class="social-media-link"
					target="_blank">
					<!-- image source: freepik.com -->
					<img
					src="https://cdn.aboutstatic.com/file/75356ec63103aca8bf43a3071ed2a242.png?quality=75&height=75&width=75"
					alt="media" class="social-media-img">
				</a>
				</div>
			</div>
			</div>
		</div>
		</div>
	</footer>

<script src="{{ asset('js/serverRequester.js') }}"></script>
<script src="{{ asset('components/products/products.js') }}"></script>
<script src="{{ asset('components/navbar/navbar.js') }}"></script>
<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
</body>

</html>