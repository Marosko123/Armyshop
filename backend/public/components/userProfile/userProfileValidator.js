class UserProfileValidator {
    static areAllInputsValid = (inputElements) => {
        let numberOfErrors = 0;

        numberOfErrors += this.validatePersonalInformation(inputElements);
        numberOfErrors += this.validateAddress(inputElements);

        if (numberOfErrors === 0) {
            return true;
        }

        document.querySelector(".input-control.error").scrollIntoView();
        return false;
    };

    static validatePersonalInformation = (inputElements) => {
        const firstNameValue = inputElements.firstName.value.trim();
        const lastNameValue = inputElements.lastName.value.trim();
        let numberOfErrors = 0;

        if (firstNameValue === "") {
            this.setError(inputElements.firstName, "First name is required");
            numberOfErrors++;
        } else {
            this.setSuccess(inputElements.firstName);
        }

        if (lastNameValue === "") {
            this.setError(inputElements.lastName, "Last name is required");
            numberOfErrors++;
        } else {
            this.setSuccess(inputElements.lastName);
        }

        return numberOfErrors;
    };

    static validateAddress = (inputElements) => {
        const addressValue = inputElements.address.value.trim();
        const zipValue = inputElements.zip.value.trim().replaceAll(" ", "");
        const cityValue = inputElements.city.value.trim();
        const countryValue = inputElements.country.value.trim();
        const phoneValue = inputElements.phone.value.trim().replaceAll(" ", "");
        let numberOfErrors = 0;

        if (addressValue === "") {
            this.setError(inputElements.address, "Address is required");
            numberOfErrors++;
        } else {
            this.setSuccess(inputElements.address);
        }

        if (zipValue === "") {
            this.setError(inputElements.zip, "Zip is required");
            numberOfErrors++;
        } else if (!this.isValidZip(zipValue)) {
            this.setError(inputElements.zip, "Provide a valid zip number");
            numberOfErrors++;
        } else {
            this.setSuccess(inputElements.zip);
        }

        if (cityValue === "") {
            this.setError(inputElements.city, "City is required");
            numberOfErrors++;
        } else {
            this.setSuccess(inputElements.city);
        }

        if (countryValue === "") {
            this.setError(inputElements.country, "Country is required");
            numberOfErrors++;
        } else {
            this.setSuccess(inputElements.country);
        }

        if (phoneValue[0] === "0") {
            phoneValue = `+421${phoneValue.substring(1)}`;
        }
        if (phoneValue === "") {
            this.setError(inputElements.phone, "Phone is required");
            numberOfErrors++;
        } else if (!this.isValidPhone(phoneValue)) {
            this.setError(inputElements.phone, "Provide a valid phone number");
            numberOfErrors++;
        } else {
            this.setSuccess(inputElements.phone);
        }

        return numberOfErrors;
    };

    static setError = (element, message) => {
        const inputControl = element.parentElement;
        const errorDisplay = inputControl.querySelector(".error");

        errorDisplay.innerText = message;
        inputControl.classList.add("error");
        inputControl.classList.remove("success");
    };

    static setSuccess = (element) => {
        const inputControl = element.parentElement;
        const errorDisplay = inputControl.querySelector(".error");

        errorDisplay.innerText = "";
        inputControl.classList.add("success");
        inputControl.classList.remove("error");
    };

    static isValidPhone = (phone) => {
        return /^\+421[0-9]{9}$/.test(phone);
    };

    static isValidZip = (zip) => {
        return /(^\d{5}$)|(^\d{5}-\d{4}$)/.test(zip);
    };
}
