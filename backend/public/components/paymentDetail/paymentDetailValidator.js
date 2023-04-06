const areAllInputsValid = (inputElements) => {
    let numberOfErrors = 0;

    numberOfErrors += validatePersonalInformation(inputElements);
    numberOfErrors += validateAddress(inputElements);

    if (numberOfErrors === 0) {
        return true;
    }

    document.getElementsByClassName("error")[0].scrollIntoView();
    return false;
};

const validatePersonalInformation = (inputElements) => {
    const firstNameValue = inputElements.firstName.value.trim();
    const lastNameValue = inputElements.lastName.value.trim();
    const emailValue = inputElements.email.value.trim();
    let numberOfErrors = 0;

    if (firstNameValue === "") {
        setError(inputElements.firstName, "First name is required");
        numberOfErrors++;
    } else {
        setSuccess(inputElements.firstName);
    }

    if (lastNameValue === "") {
        setError(inputElements.lastName, "Last name is required");
        numberOfErrors++;
    } else {
        setSuccess(inputElements.lastName);
    }

    if (emailValue === "") {
        setError(inputElements.email, "Email is required");
        numberOfErrors++;
    } else if (!isValidEmail(emailValue)) {
        setError(inputElements.email, "Provide a valid email address");
        numberOfErrors++;
    } else {
        setSuccess(inputElements.email);
    }

    return numberOfErrors;
};

const validateAddress = (inputElements) => {
    const addressValue = inputElements.address.value.trim();
    const zipValue = inputElements.zip.value.trim().replaceAll(" ", "");
    const cityValue = inputElements.city.value.trim();
    const countryValue = inputElements.country.value.trim();
    const telephoneValue = inputElements.telephone.value
        .trim()
        .replaceAll(" ", "");
    let numberOfErrors = 0;

    if (addressValue === "") {
        setError(inputElements.address, "Address is required");
        numberOfErrors++;
    } else {
        setSuccess(inputElements.address);
    }

    if (zipValue === "") {
        setError(inputElements.zip, "Zip is required");
        numberOfErrors++;
    } else if (!isValidZip(zipValue)) {
        setError(inputElements.zip, "Provide a valid zip number");
        numberOfErrors++;
    } else {
        setSuccess(inputElements.zip);
    }

    if (cityValue === "") {
        setError(inputElements.city, "City is required");
        numberOfErrors++;
    } else {
        setSuccess(inputElements.city);
    }

    if (countryValue === "") {
        setError(inputElements.country, "Country is required");
        numberOfErrors++;
    } else {
        setSuccess(inputElements.country);
    }

    if (telephoneValue[0] === "0") {
        telephoneValue = `+421${telephoneValue.substring(1)}`;
    }
    if (telephoneValue === "") {
        setError(inputElements.telephone, "Telephone is required");
        numberOfErrors++;
    } else if (!isValidTelephone(telephoneValue)) {
        setError(inputElements.telephone, "Provide a valid telephone number");
        numberOfErrors++;
    } else {
        setSuccess(inputElements.telephone);
    }

    return numberOfErrors;
};

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

const isValidTelephone = (telephone) => {
    return /^\+421[0-9]{9}$/.test(telephone);
};

const isValidZip = (zip) => {
    return /(^\d{5}$)|(^\d{5}-\d{4}$)/.test(zip);
};
