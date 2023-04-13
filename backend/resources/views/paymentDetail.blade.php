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
    @include('components.navbar')

	<main>
		<!-- payment detail -->
		<div id="payment-detail">
			<div id="payment-detail-wrapper">
				<form>
					<h1 class="heading"> Order and pay </h1>

					<!-- personal information -->
					<h3> Personal information </h3>
					<div id="personal-info">
						<div class="mb-1 input-control">
							<input id="first-name-input" type="text" class="form-control" placeholder="First Name" aria-label="First Name">
							<div class="error"></div>
						</div>
						<div class="mb-1 input-control">
							<input id="last-name-input" type="text" class="form-control" placeholder="Last Name" aria-label="Last Name">
							<div class="error"></div>
						</div>
						<div class="mb-1 input-control">
							<input id="email-input" type="text" class="form-control" placeholder="Email" aria-label="Recipient's username">
							<div class="error"></div>
						</div>
						<div class="line"> </div>
					</div>

					<!-- address -->
					<div id="address">
						<h3> Address </h3>
						<div class="mb-1 input-control">
							<input id="address-input" type="text" class="form-control" placeholder="Address" aria-label="Address">
							<div class="error"></div>
						</div>
						<div class="mb-1 input-control">
							<input id="zip-input" type="text" class="form-control" placeholder="Zip Code" aria-label="Zip Code">
							<div class="error"></div>
						</div>
						<div class="mb-1 input-control">
							<input id="city-input" type="text" class="form-control" placeholder="City" aria-label="City">
							<div class="error"></div>
						</div>
						<div class="mb-1 input-control">
							<input id="country-input" type="text" class="form-control" placeholder="Country" aria-label="Country">
							<div class="error"></div>
						</div>
						<div class="mb-1 input-control">
							<input id="telephone-input" type="text" class="form-control" placeholder="Tel. Number" aria-label="Tel. Number">
							<div class="error"></div>
						</div>
						<button class="btn btn-danger reset-button" type="reset" value="Reset"> Clear input fields </button>
					</div>
					<div class="line"> </div>

					<!-- delivery -->
					<h3> Delivery </h3>
					<div id="delivery">
						<div class="input-group mb-1">
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

					<a class="btn btn-success" id="order-button" onclick="onOrderNowClicked(this)"> Order Now </a>
				</form>
			</div>

			<!-- popup -->
			<div id="popup">
				<div id="popup1" class="overlay">
					<div class="popup">
						<h2> Thank you for the order </h2>
						<div class="content">
							<p> We hope <strong> you will love </strong> our products! </p>
						</div>
						<p id="countdown">Auto redirec in: 5</p>
						<a class="close" href="/"> Go To Landing Page </a>
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
	</main>

	<!-- contact us -->
  @include('components.contactUs')
	
	<script src="{{ asset('js/serverRequester.js') }}"></script>
	<script src="{{ asset('components/navbar/navbar.js') }}"></script>
	<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
	<script src="{{ asset('components/paymentDetail/paymentDetail.js') }}"></script>
	<script src="{{ asset('components/paymentDetail/paymentDetailValidator.js') }}"></script>
</body>
</html>
