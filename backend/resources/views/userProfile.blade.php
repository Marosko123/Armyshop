
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
	integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('components/contactUs/contactUs.css') }}">
	<link rel="stylesheet" href="{{ asset('components/userProfile/userProfile.css') }}">
	<link rel="stylesheet" href="{{ asset('components/loginAndRegisterMenu/loginAndRegisterMenu.css') }}">
</head>

<body hidden>
	<!-- navbar -->
    @include('components.navbar')
	
	<main>
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
								<label for="name">First Name:</label>
								<div class="mb-1 input-control">
									<input type="text" id="first-name-input" placeholder=""><br>
									<div class="error"></div>
								</div>
								
								<label for="name">Last Name:</label>
								<div class="mb-1 input-control">
									<input type="text" id="last-name-input" placeholder=""><br>
									<div class="error"></div>
								</div>
								
								<!-- <label for="email">E-mail:</label>
								<div class="mb-1 input-control">
									<input type="email" id="email-input" placeholder=""><br>
									<div class="error"></div>
								</div> -->

								<label for="address">Address:</label>
								<div class="mb-1 input-control">
									<input type="text" id="address-input" placeholder=""><br>
									<div class="error"></div>
								</div>

								<label for="zip-code">Zip Code:</label>
								<div class="mb-1 input-control">
									<input type="text" id="zip-input" placeholder=""><br>
									<div class="error"></div>
								</div>

								<label for="city">City:</label>
								<div class="mb-1 input-control">
									<input type="text" id="city-input" placeholder=""><br>
									<div class="error"></div>
								</div>
								
								<label for="country">Country:</label>
								<div class="mb-1 input-control">
									<input type="text" id="country-input" placeholder=""><br>
									<div class="error"></div>
								</div>

								<label for="phone">Phone Number:</label>
								<div class="mb-1 input-control">
									<input type="tel" id="telephone-input" placeholder=""><br>
									<div class="error"></div>
								</div>

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
  @include('components.contactUs')

<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
<script src="{{ asset('components/userProfile/userProfileValidator.js') }}"></script>
<script src="{{ asset('components/userProfile/userProfile.js') }}"></script>
</body>

</html>