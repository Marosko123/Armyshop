<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Products</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('components/editProducts/editProducts.css') }}">
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
		<div id="edit-products">
			<h1>Edit Products</h1>
				<!-- cart container -->
				<div id="container">
					<div class="listContainerElement">
					<div class="itemList">
						<ul id="products">

            @for($i = 0; $i < count($products); $i++)
            <div class="item" product-id="{{$products[$i]['id']}}">
              <img class="img" src="{{$products[$i]['image_url']}}" alt="Women's Leather Jacket">
              
              <p class="item-title">{{$products[$i]['name']}}</p>

              <button class="edit-button">
                <!-- image source: svgrepo.com -->
                <img class="edit-button-img" src="../../images/editProductsImages/pencil-svgrepo-com.svg">
              </button>

              <button class="remove-button">
                <!-- image source: flaticon.com -->
                <img class="remove-button-img" src="../../images/shoppingCartImages/3515498.png">
              </button>
            </div>
            @endfor
						</ul>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- contact us -->
  @include('components.contactUs')

	<script src="{{ asset('components/editProducts/editProducts.js') }}"></script>
	<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
</body>
</html>
