<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Army Shop Landing Page</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('components/shoppingCart/shoppingCart.css') }}">
<link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('components/contactUs/contactUs.css') }}">
<link rel="stylesheet" href="{{ asset('components/products/products.css') }}">
</head>
<body>
	<!-- navbar -->
    @include('components.navbar')

	<main>
		<!-- shopping-cart -->
		<div id="shopping-cart">
			<h1>Shopping cart</h1>
			<div class="container">
				<!-- cart container -->
				<div id="cart-container">
					<div class="listContainerElement">
					<div class="itemList">
						<ul>
						<li>
							<div class="item">
							<!-- image source: unsplash.com -->
							<img class="img" src="{{ asset('images/productImages/weapons/bexar-arms-uLOWWVPVefQ-unsplash.jpg') }}" alt="">
							<div class="desc">
								<div class="title-remove">
								<h3>Assault rifle black steel
								</h3>
								<button class="remove-button">
									<!-- image source: flaticon.com -->
									<img class="remove-button-img" src="{{ asset('images/shoppingCartImages/3515498.png') }}">
								</button>
								</div>
								<div class="prices">
								<p class="singularPrice">339.90€</p>
								<div class="multiple">
									<div class="countControls">
									<button class="countControlButtons" id="minusButton">-</button>
									<input type="number" value="1">
									<button class="countControlButtons" id="plusButton">+</button>
									</div>
									<p class="multiplePrice">339.90€</p>
								</div>
								</div>
							</div>
							</div>
							<div class="item">
							<!-- image source: unsplash.com -->
							<img class="img" src="{{ asset('images/productImages/weapons/dusty-barnes-oNyJXHIxlWI-unsplash.jpg') }}" alt="">
							<div class="desc">
								<div class="title-remove">
								<h3>Small firearm vintage cast steel, wooden handle 6 shots
								</h3>
								<button class="remove-button">
									<!-- image source: flaticon.com -->
									<img class="remove-button-img" src="{{ asset('images/shoppingCartImages/3515498.png') }}">
								</button>
								</div>
								<div class="prices">
								<p class="singularPrice">39.90€</p>
								<div class="multiple">
									<div class="countControls">
									<button class="countControlButtons" id="minusButton">-</button>
									<input type="number" value="2">
									<button class="countControlButtons" id="plusButton">+</button>
									</div>
									<p class="multiplePrice">79.80€</p>
								</div>
								</div>
							</div>
							</div>
							<div class="item">
							<!-- image source: unsplash.com -->
							<img class="img" src="{{ asset('images/productImages/weapons/jay-rembert-e0kgA5otj0Q-unsplash.jpg') }}" alt="">
							<div class="desc">
								<div class="title-remove">
								<h3>Small firearm modern cast steel, semi-automatic
								</h3>
								<button class="remove-button">
									<!-- image source: flaticon.com -->
									<img class="remove-button-img" src="{{ asset('images/shoppingCartImages/3515498.png') }}">
								</button>
								</div>
								<div class="prices">
								<p class="singularPrice">250€</p>
								<div class="multiple">
									<div class="countControls">
									<button class="countControlButtons" id="minusButton">-</button>
									<input type="number" value="4">
									<button class="countControlButtons" id="plusButton">+</button>
									</div>
									<p class="multiplePrice">1000€</p>
								</div>
								</div>
							</div>
							</div>
							<div class="item">
							<!-- image source: unsplash.com -->
							<img class="img" src="{{ asset('images/productImages/weapons/stngr-industries-D6egwLuXVDU-unsplash.jpg') }}" alt="">
							<div class="desc">
								<div class="title-remove">
								<h3>Assault rifle with sights
								</h3>
								<button class="remove-button">
									<!-- image source: flaticon.com -->
									<img class="remove-button-img" src="{{ asset('images/shoppingCartImages/3515498.png') }}">
								</button>
								</div>
								<div class="prices">
								<p class="singularPrice">39.90€</p>
								<div class="multiple">
									<div class="countControls">
									<button class="countControlButtons" id="minusButton">-</button>
									<input type="number" value="2">
									<button class="countControlButtons" id="plusButton">+</button>
									</div>
									<p class="multiplePrice">79.80€</p>
								</div>
								</div>
							</div>
							</div>
						</li>
						</ul>
					</div>
					</div>
				</div>

				<!-- order summary -->
				<div id="order-summary">
					<div class="containerElement">
					<h2>Order Summary</h2>
					<table>
						<tr>
						<td>Subtotal:</td>
						<td>1499,50€</td>
						</tr>
						<tr>
						<td>Shipping:</td>
						<td>10€</td>
						</tr>
						<tr id="total">
						<td id="total">Total:</td>
						<td id="total">1509,50€</td>
						</tr>
					</table>
					</div>
					<button id="continueButton" onclick="onContinueButtonClicked()">Continue</button>
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

    <script src="{{ asset('js/subcategoriesMap.js') }}"></script>
    <script src="{{ asset('js/serverRequester.js') }}"></script>
	<script src="{{ asset('components/shoppingCart/shoppingCart.js') }}"></script>
	<script src="{{ asset('components/navbar/navbar.js') }}"></script>
	<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
</body>
</html>
