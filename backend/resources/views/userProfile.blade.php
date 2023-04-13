<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Army Shop Landing Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('components/userProfile/userProfile.css') }}">
	<link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('components/contactUs/contactUs.css') }}">
</head>

<body hidden>
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

	<main >
		<!-- user-profile -->
		<div id="user-profile">
			<h1>User Profile</h1>
			<div class="container">
				<div class="verticalContainer">
					<!-- biling information -->
					<div class="containerElement">
						<h2>Billing information</h2>
						<hr>
						<div class="formContainer">
							<form>
								<label for="name">Name:</label>
								<input type="text" id="name" name="name" placeholder=""><br>

								<label for="email">E-mail:</label>
								<input type="email" id="email" name="email" placeholder=""><br>

								<label for="phone">Phone Number:</label>
								<input type="tel" id="phone" name="phone" placeholder=""><br>

								<label for="address">Address:</label>
								<input type="text" id="address" name="address" placeholder=""><br>

								<label for="zip-code">Zip Code:</label>
								<input type="text" id="zip-code" name="zip-code" placeholder=""><br>

								<label for="city">City:</label>
								<input type="text" id="city" name="city" placeholder=""><br>

								<label for="country">Country:</label>
								<input type="text" id="country" name="country" placeholder=""><br>

								<button type="button" id="save-changes-btn">SAVE CHANGES</button>
							</form>
						</div>
					</div>

					<!-- military passport -->
					<div class="containerElement">
						<h2>Military passport</h2>
						<hr>
						<div class="image-container">
							<label for="image-selector">Select an image:</label>
							<input type="file" id="image-selector" accept="image/*">
						</div>
					</div>
				</div>

				<!-- statistics -->
				<div class="verticalContainer">
					<div class="containerElementFlex">
						<h2>Your experience</h2>
						<hr>
						<button type="button" id="order-history-btn">ORDER HISTORY</button>
						<div id="orderHistoryContainer">
							<table>
								<tr>
									<th>ID:</th>
									<th>Items:</th>
									<th>Price:</th>
								</tr>
								<tr>
									<td>#10023</td>
									<td>20</td>
									<td>250€</td>
								</tr>
								<tr>
									<td>#10342</td>
									<td>2</td>
									<td>26.78€</td>
								</tr>
								<tr>
									<td>#18734</td>
									<td>2000</td>
									<td>1245€</td>
								</tr>
								<tr>
									<td>#19734</td>
									<td>2000</td>
									<td>1245€</td>
								</tr>
								<tr>
									<td>#19433</td>
									<td>1</td>
									<td>1245000€</td>
								</tr>
							</table>
						</div>
						<button type="button" id="wish-list-btn">WISH LIST</button>
						<div id="wishListContainer">
							<table>
								<tr class="wishListRow">
									<td>
										<!-- image source: unsplash.com -->
										<img class="productImg"
											src="{{ asset('images/productImages/weapons/jay-rembert-e0kgA5otj0Q-unsplash.jpg') }}">
									</td>
									<td>Small firearm modern cast steel, semi-automatic</td>
									<td class="wishListPrice">250€</td>
								</tr>
								<tr class="wishListRow">
									<td>
										<!-- image source: unsplash.com -->
										<img class="productImg"
											src="{{ asset('images/productImages/weapons/bexar-arms-uLOWWVPVefQ-unsplash.jpg') }}">
									</td>
									<td>Assault rifle black steel</td>
									<td class="wishListPrice">339.90€</td>
								</tr>
							</table>
						</div>
					</div>

					<!-- change password -->
					<div class="containerElement">
						<h2>Change password</h2>
						<hr>
						<label for="passOld">Old password:</label>
						<input type="password" id="passOld" name="passOld"><br>

						<label for="passNew">New password:</label>
						<input type="password" id="passNew" name="passNew"><br>

						<label for="passNewConfirm">Confirm new password:</label>
						<input type="password" id="passNewConfirm" name="passNewConfirm"><br>

						<button type="button" id="change-password-btn">CHANGE PASSWORD</button>
					</div>
					<button type="button" id="log-out-btn">Log Out</button>
				</div>
			</div>
		</div>
	</main>

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
					<a href="/">
						<!-- custom image -->
						<img class="contact-us-logo" src="{{ asset('images/logo/logoTransparent.png') }}"
							alt="Armyshop">
					</a>
					<div class="contact-us-social-media">
						<div>
							<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"
								class="social-media-link" target="_blank">
								<!-- image source: freepik.com -->
								<img src="https://cdn.aboutstatic.com/file/d473bb55bdf6bd6430eeff7ed35fa4ca.png?quality=75&amp;height=480&amp;width=360"
									alt="media" class="social-media-img">
							</a>
							<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"
								class="social-media-link" target="_blank">
								<!-- image source: freepik.com -->
								<img src="https://cdn.aboutstatic.com/file/6a522d45a858eea2ccf7e71c2aa419fb.png?quality=75&amp;height=480&amp;width=360"
									alt="media" class="social-media-img">
							</a>
							<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"
								class="social-media-link" target="_blank">
								<!-- image source: freepik.com -->
								<img src="https://cdn.aboutstatic.com/file/75356ec63103aca8bf43a3071ed2a242.png?quality=75&height=75&width=75"
									alt="media" class="social-media-img">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

<script src="{{ asset('js/subcategoriesMap.js') }}"></script>
<script src="{{ asset('js/serverRequester.js') }}"></script>
<script src="{{ asset('components/navbar/navbar.js') }}"></script>
<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
<script src="{{ asset('components/userProfile/userProfile.js') }}"></script>
</body>

</html>