<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="../../common/styles.css"> -->
    <link rel="stylesheet" href="{{ asset('components/productDetail/productDetail.css') }}">
    <link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('components/contactUs/contactUs.css') }}">
    <link rel="stylesheet" href="{{ asset('components/loginAndRegisterMenu/loginAndRegisterMenu.css') }}">
</head>
<body>
    <!-- navbar -->
    @include('components.navbar')

	<main>
        <div class="container">
            <section id="header">
                <div class="d-flex align-items-center justify-content-between mb-3 w-100">
                    <div class="title-subtitle mx-auto">
                        <h1 id="product-title"></h1>
                    </div>
                    <!-- image source: flaticon.com -->
                    <img src="{{ asset('images/productDetailImages/heart6.png') }}" alt="add to liked" class="liked" onclick="toggleIcon(this)">
                </div>
            </section>

            <section id="carrouselAndPricing" class="align-items-center">
            <section id="carrousel">
                <div id="carouselExampleControls" class="carousel slide">
                    <div class="carousel-inner rounded" id="image-container">
                    <div class="carousel-item active">
                        <img class="d-block w-100 detail-image" src="https://icon-library.com/images/loading-icon/loading-icon-16.jpg" alt="loading image" style="width:50rem !important; height:35rem !important; object-fit:cover">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            <section id="pricing-window">
                <div class="bg-light rounded mx-auto d-block">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-6">
                    <form>
                        <div class="mb-4 mt-2 text-center">
                            <h4 class="priceFor1"></h4>
                            <label for="amount" class="form-label">Amount</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" id="minusBtn">-</button>
                                <input type="number" class="form-control text-center" id="amount" name="amount" value="1">
                                <button class="btn btn-outline-secondary" type="button" id="plusBtn">+</button>
                            </div>
                        </div>
                        <div class="mb-3 text-center">
                            <h4>Total Price</h4>
                            <h4 class="text-center" id="total-price">5999.99 €</h4>
                        </div>
                        <div class="mb-3 text-center">
                        <!-- image source: flaticon.com -->
                        <button class="addToBasket"><img width="30%" src="{{ asset('images/productDetailImages/cart.png') }}" alt="Empty Shopping Basket - Shopping Basket Icon Png@seekpng.com">
                            <p class="small">add to basket</p></button>
                        
                        <p>or</p>
                        <button type="submit" class="btn btn-success btn-lg" id="order-now">Order Now</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </section>
            </section>
            <div id="description" class="mt-5">
            <p>The AK-47 is a selective-fire assault rifle that was designed by Mikhail Kalashnikov in the Soviet Union in 1947. It is one of the most widely used firearms in the world due to its simplicity, reliability, and durability. The AK-47 fires 7.62x39mm cartridges and can be used in a variety of combat situations.</p>
            </div>
        </div>
    </main>

    <!-- popup -->
    <div id="popup">
        <div id="popup1" class="overlay">
            <div class="popup text-center">
                <h2 class="popup-info"> Product added to basket. </h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    We hope you will love it!
                </div>
                <p id="countdown">Auto redirect in: 5</p>
                <a class="close popup-goto" href="/"> Go To Basket </a>
            </div>
        </div>
    </div>

    <!-- contact-us -->
  	@include('components.contactUs')
		
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="{{ asset('components/productDetail/productDetail.js') }}"></script>
	<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
</body>
</html>
