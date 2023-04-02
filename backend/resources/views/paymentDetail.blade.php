<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment Detail</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('components/paymentDetail/paymentDetail.css') }}">
	<link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('components/contactUs/contactUs.css') }}">
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
					<input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
					<!-- image source: freeiconspng.com -->
					<img class="search-img" 
						src="https://www.freeiconspng.com/uploads/search-icon-png-5.png" 
						alt="Responsive image">
					<button class="button shopping-cart__button">
					<!-- image source: freeiconspng.com -->
						<img class="navbar-img" 
							src="https://www.freeiconspng.com/uploads/bag-icon-6.png" 
							alt="Responsive image">
					</button>
					<button class="button profile__button">
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
						<button
						class="btn dropdown-toggle"
						type="button"
						id="dropdownMenuButton"
						data-mdb-toggle="dropdown"
						aria-expanded="false"
						>
						Weapons
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<li><a class="dropdown-item" href="#">Pistols</a></li>
						<li><a class="dropdown-item" href="#">Rifles</a></li>
						<li><a class="dropdown-item" href="#">Submachine guns</a></li>
						<li><a class="dropdown-item" href="#">Heavy</a></li>
						<li><a class="dropdown-item" href="#">Knives</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<button
						class="btn dropdown-toggle"
						type="button"
						id="dropdownMenuButton"
						data-mdb-toggle="dropdown"
						aria-expanded="false"
						>
						Transport
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<li><a class="dropdown-item" href="#">Cars</a></li>
						<li><a class="dropdown-item" href="#">Motocycles</a></li>
						<li><a class="dropdown-item" href="#">Panzers</a></li>
						<li><a class="dropdown-item" href="#">Planes</a></li>
						<li><a class="dropdown-item" href="#">Boats</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<button
						class="btn dropdown-toggle"
						type="button"
						id="dropdownMenuButton"
						data-mdb-toggle="dropdown"
						aria-expanded="false"
						>
						Clothing
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<li><a class="dropdown-item" href="#">Jackets</a></li>
						<li><a class="dropdown-item" href="#">Trousers</a></li>
						<li><a class="dropdown-item" href="#">Shoes</a></li>
						<li><a class="dropdown-item" href="#">Pants</a></li>
						<li><a class="dropdown-item" href="#">Socks</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<button
						class="btn dropdown-toggle"
						type="button"
						id="dropdownMenuButton"
						data-mdb-toggle="dropdown"
						aria-expanded="false"
						>
						Explosives
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<li><a class="dropdown-item" href="#">C4s</a></li>
						<li><a class="dropdown-item" href="#">Nukes</a></li>
						<li><a class="dropdown-item" href="#">Grenades</a></li>
						<li><a class="dropdown-item" href="#">TNTs</a></li>
						<li><a class="dropdown-item" href="#">Bombs</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<button
						class="btn dropdown-toggle"
						type="button"
						id="dropdownMenuButton"
						data-mdb-toggle="dropdown"
						aria-expanded="false"
						>
						Equipment
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<li><a class="dropdown-item" href="#">Backpacks</a></li>
						<li><a class="dropdown-item" href="#">Hunting</a></li>
						<li><a class="dropdown-item" href="#">Camping</a></li>
						</ul>
					</div>
				</div>
				<div class="navbar-dropdown container-fluid">
					<div class="dropdown">
						<button
						class="btn dropdown-toggle"
						type="button"
						id="dropdownMenuButton"
						data-mdb-toggle="dropdown"
						aria-expanded="false"
						>
						Accessories
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<li><a class="dropdown-item" href="#">Glasses</a></li>
						<li><a class="dropdown-item" href="#">Face pain</a></li>
						<li><a class="dropdown-item" href="#">Camouflage</a></li>
						</ul>
					</div>
				</div>
			</nav>
			</div>
		</div>
		</header>

		<!-- payment detail -->
		<div id="payment-detail">
			<div id="payment-detail-wrapper">
				<h1 class="heading"> Order and pay </h1>

				<!-- personal information -->
				<h3> Personal information </h3>
				<div id="personal-info">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="First Name" aria-label="First Name">
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name">
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Email" aria-label="Recipient's username">
					</div>
					<div class="line"> </div>
				</div>

				<!-- address -->
				<div id="address">
					<h3> Address </h3>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Address" aria-label="Address">
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Zip Code" aria-label="Zip Code">
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="City" aria-label="City">
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Country" aria-label="Country">
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Tel. Number" aria-label="Tel. Number">
					</div>
				</div>
				<div class="line"> </div>

				<!-- delivery -->
				<h3> Delivery </h3>
				<div id="delivery">
					<div class="input-group mb-3">
						<div class="delivery-row">
							<input class="delivery-checkbox" type="checkbox" onchange="onDeliveryOptionChanged(this)" checked>
							<!-- custom image -->
							<img class="delivery-item-icon" src="{{ asset('images/logo/logoTransparent.png') }}" alt="">
							<div class="delivery-label"> Pick up in the store </div>
							<span class="delivery-price"> Free </span>
							<span class="delivery-availability"> Tomorrow 12:00 </span>
						</div>
						<div class="delivery-row">
							<input class="delivery-checkbox " type="checkbox" onchange="onDeliveryOptionChanged(this)">
							<!-- freepik license -->
							<!-- https://www.freepik.com/free-vector/documents-letters-express-courier-delivering-postal-services-post-office-services-post-delivery-agent-post-office-card-accounts-concept-pinkish-coral-bluevector-isolated-illustration_11667313.htm#query=post%20office&position=0&from_view=search&track=ais -->
							<img class="delivery-item-icon" src="{{ asset('images/paymentDetailImages/postOffice.jpg') }}" alt="">
							<div class="delivery-label"> Post office </div>
							<span class="delivery-price"> 2.50 € </span>
							<span class="delivery-availability"> Tomorrow 18:00 </span>
						</div>
						<div class="delivery-row">
							<input class="delivery-checkbox " type="checkbox" onchange="onDeliveryOptionChanged(this)">
							<!-- freepik license -->
							<!-- https://www.freepik.com/free-vector/documents-letters-express-courier-delivering-postal-services-post-office-services-post-delivery-agent-post-office-card-accounts-concept-pinkish-coral-bluevector-isolated-illustration_11667313.htm#query=post%20office&position=0&from_view=search&track=ais -->
							<img class="delivery-item-icon" src="{{ asset('images/paymentDetailImages/courier.jpg') }}" alt="">
							<div class="delivery-label"> DHL </div>
							<span class="delivery-price"> 3.50 € </span>
							<span class="delivery-availability"> Tomorrow 12:00 </span>
						</div>
					</div>
				</div>
				<div class="line"> </div>

				<!-- payment -->
				<h3> Payment </h3>
				<div id="payment">
					<div class="input-group mb-3">
						<div class="payment-row">
							<input class="payment-checkbox" type="checkbox" onchange="onPaymentOptionChanged(this)" checked>
							<!-- freepik license -->
							<!-- https://www.freepik.com/free-vector/black-credit-card_1014950.htm#query=credit%20card&position=0&from_view=search&track=ais -->
							<img class="payment-item-icon" src="{{ asset('images/paymentDetailImages/creditCard.jpg') }}" alt="">
							<div class="payment-label"> By card </div>
						</div>
						<div class="payment-row">
							<input class="payment-checkbox" type="checkbox" onchange="onPaymentOptionChanged(this)">
							<!-- freepik license -->
							<!-- https://www.freepik.com/free-vector/isometric-money-background_4448290.htm#query=cash&position=20&from_view=search&track=sph -->
							<img class="payment-item-icon" src="{{ asset('images/paymentDetailImages/cash.jpg') }}" alt="">
							<div class="payment-label"> In cash </div>
						</div>
					</div>
				</div>
				<div class="line"> </div>

				<a class="btn btn-success" href="#popup1" id="order-button" onclick="onOrderNowClicked(this)"> Order Now </a>
			</div>

			<!-- popup -->
			<div id="popup">
				<div id="popup1" class="overlay">
					<div class="popup">
						<h2> Thank you for the order </h2>
						<a class="close" href="#">&times;</a>
						<div class="content">
							We hope you will love our products!
						</div>
					</div>
				</div>
			</div>

			<!-- summary -->
			<div id="summary">
				<h5> Products </h5>
				<div id="summary-product-list">
					<div class="product">
						<!-- custom image -->
						<img class="summary-item-img" src="{{ asset('images/logo/logoTransparent.png') }}" alt="">
						<span class="summary-item-label"> 1x AK47 </span>
						<span class="summary-item-price"> 5.99 € </span>
					</div>
					<div class="product">
						<!-- custom image -->
						<img class="summary-item-img" src="{{ asset('images/logo/logoTransparent.png') }}" alt="">
						<span class="summary-item-label"> 1x AK47 </span>
						<span class="summary-item-price"> 5.99 € </span>
					</div>
					<div class="product">
						<!-- custom image -->
						<img class="summary-item-img" src="{{ asset('images/logo/logoTransparent.png') }}" alt="">
						<span class="summary-item-label"> 1x AK47 </span>
						<span class="summary-item-price"> 5.99 € </span>
					</div>
					<div class="product">
						<!-- custom image -->
						<img class="summary-item-img" src="{{ asset('images/logo/logoTransparent.png') }}" alt="">
						<span class="summary-item-label"> 1x AK47 </span>
						<span class="summary-item-price"> 5.99 € </span>
					</div>
					<div class="product">
						<!-- custom image -->
						<img class="summary-item-img" src="{{ asset('images/logo/logoTransparent.png') }}" alt="">
						<span class="summary-item-label"> 1x AK47 </span>
						<span class="summary-item-price"> 5.99 € </span>
					</div>
					<div class="product">
						<!-- custom image -->
						<img class="summary-item-img" src="{{ asset('images/logo/logoTransparent.png') }}" alt="">
						<span class="summary-item-label"> 1x AK47 </span>
						<span class="summary-item-price"> 5.99 € </span>
					</div>
					<div class="product">
						<!-- custom image -->
						<img class="summary-item-img" src="{{ asset('images/logo/logoTransparent.png') }}" alt="">
						<span class="summary-item-label"> 1x AK47 </span>
						<span class="summary-item-price"> 5.99 € </span>
					</div>
				</div>
				<h5 class="summary-total-price">Total Price</h5>
				<h4 class="text-center">5999.99 €</h4>
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
	</div>

	<script src="{{ asset('components/navbar/navbar.js') }}"></script>
	<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
	<script src="{{ asset('components/paymentDetail/paymentDetail.js') }}"></script>
</body>
</html>
