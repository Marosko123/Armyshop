<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cart</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('components/shoppingCart/shoppingCart.css') }}">
<link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('components/contactUs/contactUs.css') }}">
<link rel="stylesheet" href="{{ asset('components/products/products.css') }}">
<link rel="stylesheet" href="{{ asset('components/loginAndRegisterMenu/loginAndRegisterMenu.css') }}">
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
							<ul id="products">
							</ul>
						</div>
					</div>
					<div id="cart-export-import">
						<div class="export-wrapper"> 
							<input class="export-button" type="button" value="Export To .JSON" onclick="exportAsJSON()"/>
						</div>
						<div class="import-wrapper"> 
							<input type="file" accept="application/JSON" id="selectedFile" style="display: none;" />
							<input class="import-button" type="button" value="Import .JSON" onclick="importJSON()" />
						</div>
					</div>
				</div>

				<!-- order summary -->
				<div id="order-summary">
					<div class="containerElement">
					<h2>Order Summary</h2>
					<table>
						<tr class="total">
						<td class="total">Total:</td>
						<td class="total" id="total"></td>
						</tr>
					</table>
					</div>
					<button id="continueButton" onclick="onContinueButtonClicked()">Continue</button>
				</div>
			</div>
		</div>
	</main>

	<!-- contact us -->
  @include('components.contactUs')

	<script src="{{ asset('components/shoppingCart/shoppingCart.js') }}"></script>
	<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
</body>
</html>

