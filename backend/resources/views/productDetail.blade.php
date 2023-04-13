<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="../../common/styles.css"> -->
    <link rel="stylesheet" href="{{ asset('components/productDetail/productDetail.css') }}">
    <link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('components/contactUs/contactUs.css') }}">
    
</head>
<body>
    <!-- navbar -->
    @include('components.navbar')

	<main>
        <div class="container">
            <section id="header">
                <div class="d-flex align-items-center justify-content-between mb-3 w-100">
                    <div class="title-subtitle mx-auto">
                        <h1 class="display-1" id="product-title">AK-47</h1>
                        <h5>Weapons > Rifles</h5>    
                    </div>
                    <!-- image source: flaticon.com -->
                    <img src="{{ asset('images/productDetailImages/heart6.png') }}" alt="add to liked" class="liked" onclick="toggleIcon(this)">
                </div>
            </section>

            <section id="carrouselAndPricing" class="align-items-center">
            <section id="carrousel">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <!-- image source: unsplash.com (Alexey Turenkov)-->
                        <img class="d-block w-100" src="{{ asset('images/productDetailImages/ak47-1.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <!-- image source: unsplash.com (Alexey Turenkov)-->
                        <img class="d-block w-100" src="{{ asset('images/productDetailImages/ak47-2.jpg') }}" alt="Second slide">
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
            <section id="pricing-window" class="">
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
    <footer>
        <div id="contact-us">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="{{ asset('js/serverRequester.js') }}"></script>
    <script src="{{ asset('components/productDetail/productDetail.js') }}"></script>
	<script src="{{ asset('components/navbar/navbar.js') }}"></script>
	<script src="{{ asset('components/contactUs/contactUs.js') }}"></script>
</body>
</html>
