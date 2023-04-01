const registerForm = document.getElementById("register-form");
const loginForm = document.getElementById("login-form");
const loginEmail = document.getElementById("login-email");
const registerEmail = document.getElementById("register-email");
const loginPassword1 = document.getElementById("login-password1");
const registerPassword1 = document.getElementById("register-password1");
const registerPassword2 = document.getElementById("register-password2");

registerForm?.addEventListener("submit", async (e) => {
    e.preventDefault();

    if (isRegisterInputValid()) {
        console.log("Register data are valid");

        const response = await postToUrl("/register", {
            email: registerEmail.value.trim(),
            password: registerPassword1.value.trim(),
        });

        console.log(response);

        if (response.status === 200) {
            return (window.location.href = "/");
        }
        if (response.status === 422) {
            if (response.errors.email) {
                setError(registerEmail, response.errors.email);
            }
            if (response.errors.password) {
                setError(registerPassword1, response.errors.password);
                setError(registerPassword2, response.errors.password);
            }
        }
    }
});

loginForm?.addEventListener("submit", async (e) => {
    e.preventDefault();

    if (isLoginInputValid()) {
        console.log("Login data are valid");

        const response = await postToUrl("/login", {
            email: loginEmail.value.trim(),
            password: loginPassword1.value.trim(),
        });

        console.log(response);

        if (response.status === 200) {
            return (window.location.href = "/");
        }
        if (response.status === 401) {
            setError(loginEmail, "Invalid credentials");
            return setError(loginPassword1, "Invalid credentials");
        }
        if (response.status === 422) {
            if (response.errors.email) {
                setError(loginEmail, response.errors.email);
            }
            if (response.errors.password) {
                setError(loginPassword1, response.errors.password);
            }
        }
    }
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector(".error");

    errorDisplay.innerText = message;
    inputControl.classList.add("error");
    inputControl.classList.remove("success");
};

const setSuccess = (element) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector(".error");

    errorDisplay.innerText = "";
    inputControl.classList.add("success");
    inputControl.classList.remove("error");
};

const isValidEmail = (email) => {
    const re =
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
};

const isRegisterInputValid = () => {
    const emailValue = registerEmail.value.trim();
    const passwordValue = registerPassword1.value.trim();
    const password2Value = registerPassword2.value.trim();
    let numberOfErrors = 0;

    if (emailValue === "") {
        setError(registerEmail, "Email is required");
        numberOfErrors++;
    } else if (!isValidEmail(emailValue)) {
        setError(registerEmail, "Provide a valid email address");
        numberOfErrors++;
    } else {
        setSuccess(registerEmail);
    }

    if (passwordValue === "") {
        setError(registerPassword1, "Password is required");
        numberOfErrors++;
    } else if (passwordValue.length < 8) {
        setError(registerPassword1, "Password must be at least 8 character.");
        numberOfErrors++;
    } else {
        setSuccess(registerPassword1);
    }

    if (password2Value === "") {
        setError(registerPassword2, "Please confirm your password");
        numberOfErrors++;
    } else if (password2Value !== passwordValue) {
        setError(registerPassword2, "Passwords doesn't match");
        numberOfErrors++;
    } else {
        setSuccess(registerPassword2);
    }

    return numberOfErrors === 0;
};

const isLoginInputValid = () => {
    const emailValue = loginEmail.value.trim();
    const passwordValue = loginPassword1.value.trim();
    let numberOfErrors = 0;

    if (emailValue === "") {
        setError(loginEmail, "Email is required");
        numberOfErrors++;
    } else if (!isValidEmail(emailValue)) {
        setError(loginEmail, "Provide a valid email address");
        numberOfErrors++;
    } else {
        setSuccess(loginEmail);
    }

    if (passwordValue === "") {
        setError(loginPassword1, "Password is required");
        numberOfErrors++;
    } else if (passwordValue.length < 8) {
        setError(loginPassword1, "Password must be at least 8 character.");
        numberOfErrors++;
    } else {
        setSuccess(loginPassword1);
    }

    return numberOfErrors === 0;
};
