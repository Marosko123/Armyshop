<div id="login-register-menu-wrapper">
    <!-- form -->
    <div id="form">
        <div class="header-wrapper">
            <button class="close-button">
                < </button>
                    <h5 id="header-text" class="header"> Log in </h5>
        </div>
        <div class="header-line"> </div>

        <div class="switch-menu-wrapper">
            <button id="register-switch" class="switch" onclick="openRegisterMenu()"> Register </button>
            <button id="login-switch" class="switch switch-selected" onclick="openLoginMenu()"> Log in </button>
        </div>

        <!-- custom image -->
        <img class="logo" src="http://127.0.0.1:8000/images/logo/logoTransparent.png">

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
            <input class="form-check-input militray-checkbox" type="checkbox" value="" id="flexCheckDefault"
                onclick="onMilitaryPassportChanged(this)">
            <label class="form-check-label militray-label" for="flexCheckDefault">
                I have a military passport
            </label>
            <button id="submit-button" class="w-100 btn btn-lg btn-success" type="submit" click="www.google.com"> Log in
            </button>
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
            <button id="submit-button" class="w-100 btn btn-lg btn-success" type="submit" click="www.google.com"> Log in
            </button>
            <p class="mt-5 mb-3 start-date">© 2023</p>
        </form>
    </div>

    <!-- popup -->
    <div id="login_popup">
        <div id="login_popup1" class="overlay">
            <div class="popup">
                <h2> Insert your military passport </h2>
                <a class="close" href="#" onclick="militarypassInsertionCancelled(this)">&times;</a>
                <input type="file" id="file-input" name="avatar" accept="image/png, image/jpeg"
                    onchange="imageChoosen(this)">
                <div class="selected-image-wrapper">
                    <img alt="Select a passport" id="selected-image">
                </div>
                <a class="btn btn-success submit-button" onclick="submitImage(this)"> Submit </a>
            </div>
        </div>
    </div>
</div>