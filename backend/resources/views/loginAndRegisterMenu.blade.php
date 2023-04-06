<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title> Register </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('components/loginAndRegisterMenu/loginAndRegisterMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="text-center">
    <!-- pixabay license -->
    <!-- https://pixabay.com/videos/soldier-war-nuclear-bomb-138115/ -->
    <video autoplay muted loop id="myVideo">
        <source src="{{ asset('videos/solider-explosion.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    
    <!-- pixabay license -->
    <!-- https://pixabay.com/photos/man-dirty-soldier-hero-army-brave-4207514/ -->
    <img src="{{ asset('images/loginMenuImages/solider.jpg') }}" alt="solider" id="mobile-image">
    
    <!-- form -->
    <div id="form">
        <div class="header-wrapper">
            <button class="close-button"> < </button>
            <h5 id="header-text" class="header"> Log in </h5>
        </div>
        <div class="header-line"> </div>

        <div class="switch-menu-wrapper">
            <button id="register-switch" class="switch" onclick="openRegisterMenu()"> Register </button>
            <button id="login-switch" class="switch switch-selected" onclick="openLoginMenu()"> Log in </button>
        </div>

        <!-- custom image -->
        <img class="logo" src="{{ asset('images/logo/logoTransparent.png') }}">

        <!-- register form -->
        <form id="register-form" class="hide">
            <div class="form-floating input-control">
                <input type="email" class="form-control" id="register-email" placeholder="name@example.com">
                <label for="register-email">Email address</label>
                <div class="error"></div>
            </div>
            <div class="form-floating input-control">
                <input type="password" class="form-control" id="register-password1" placeholder="Password">
                <label for="register-password1">Password</label>
                <div class="error"></div>
            </div>
            <div class="form-floating input-control">
                <input type="password" class="form-control" id="register-password2" placeholder="Password">
                <label for="register-password2">Confirm password</label>
                <div class="error"></div>
            </div>
            <input class="form-check-input militray-checkbox" type="checkbox" value="" id="flexCheckDefault" onclick="onMilitaryPassportChanged(this)">
            <label class="form-check-label militray-label" for="flexCheckDefault">
                I have a military passport
            </label>
            <button id="submit-button" class="w-100 btn btn-lg btn-success" type="submit" click="www.google.com"> Log in </button>
            <p class="mt-5 mb-3 start-date">© 2023</p>
        </form>

        <!-- login form -->
        <form id="login-form">
            <div class="form-floating input-control">
                <input type="email" class="form-control" id="login-email" placeholder="name@example.com">
                <label for="login-email">Email address</label>
                <div class="error"></div>
            </div>
            <div class="form-floating input-control">
                <input type="password" class="form-control" id="login-password1" placeholder="Password">
                <label for="login-password1">Password</label>
                <div class="error"></div>
            </div>
            <button id="submit-button" class="w-100 btn btn-lg btn-success" type="submit" click="www.google.com"> Log in </button>
            <p class="mt-5 mb-3 start-date">© 2023</p>
        </form>
    </div>

    <!-- popup -->
    <div id="popup">
        <div id="popup1" class="overlay">
            <div class="popup">
                <h2> Insert your military passport </h2>
                <a class="close" href="#" onclick="militarypassInsertionCancelled(this)">&times;</a>
                <input type="file"
                    id="file-input" name="avatar"
                    accept="image/png, image/jpeg"
                    onchange="imageChoosen(this)">
                <div class="selected-image-wrapper">
                    <img alt="Select a passport" id="selected-image" >
                </div>
                <a class="btn btn-success submit-button" onclick="submitImage(this)"> Submit </a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/serverRequester.js') }}"></script>
    <script src="{{ asset('components/loginAndRegisterMenu/loginAndRegisterMenu.js') }}"></script>
    <script src="{{ asset('components/loginAndRegisterMenu/loginAndRegisterMenuValidator.js') }}"></script>
</body>
</html>