console.log("test");

isLoginMenuOpen = true;
isMilitaryPassChecked = false;
isImageInserted = false;

imageToSubmit = null;

openRegisterMenu = (event) => {
    if (!isLoginMenuOpen) {
        return;
    }
    removeErrorClasses();

    document.querySelector("#register-switch").classList.add("switch-selected");
    document.querySelector("#login-switch").classList.remove("switch-selected");

    document.querySelector("#login-form").classList.add("hide");
    document.querySelector("#register-form").classList.remove("hide");

    document.querySelector("#submit-button").innerHTML = "Register";
    document.querySelector("#header-text").innerHTML = "Register";

    isLoginMenuOpen = !isLoginMenuOpen;
};

openLoginMenu = (event) => {
    if (isLoginMenuOpen) {
        return;
    }
    removeErrorClasses();

    document.querySelector("#login-switch").classList.add("switch-selected");
    document
        .querySelector("#register-switch")
        .classList.remove("switch-selected");

    document.querySelector("#register-form").classList.add("hide");
    document.querySelector("#login-form").classList.remove("hide");

    document.querySelector("#submit-button").innerHTML = "Log in";
    document.querySelector("#header-text").innerHTML = "Log in";

    isLoginMenuOpen = !isLoginMenuOpen;
};

onMilitaryPassportChanged = (event) => {
    isMilitaryPassChecked = !isMilitaryPassChecked;

    window.location.assign("#popup1");
};

militarypassInsertionCancelled = (event) => {
    isMilitaryPassChecked = false;
    changeMilitaryCheckbox(false);
};

imageChoosen = (event) => {
    const [file] = event.files;
    if (!file) {
        imageToSubmit = null;
        return;
    }

    const reader = new FileReader();
    reader.readAsDataURL(file);

    reader.addEventListener("load", () => {
        sessionStorage.setItem("military-passport", reader.result);
    });

    document.querySelector("#selected-image").src =
        sessionStorage.getItem("military-passport");
    document.querySelector("#selected-image").style.marginTop = "0px";

    imageToSubmit = true;
};

submitImage = (event) => {
    if (!imageToSubmit) {
        return;
    }

    isImageInserted = true;
    isMilitaryPassChecked = true;
    changeMilitaryCheckbox(true);
    window.location.assign("#");
};

myFunction = (event) => {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
};

changeMilitaryCheckbox = (value) => {
    document.querySelector("#flexCheckDefault").checked = value;
};

removeErrorClasses = () => {
    document.querySelectorAll(".error").forEach((e) => {
        if (!e.classList.contains("input-control")) {
            e.innerHTML = "";
        }
    });
};
