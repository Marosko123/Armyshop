class PaymentDetailValidator {
    static areAllInputsValid = (inputElements) => {
        let numberOfErrors = 0;

        numberOfErrors += this.validatePersonalInformation(inputElements);
        numberOfErrors += this.validateAddress(inputElements);

        if (numberOfErrors === 0) {
            return true;
        }

        document.getElementsByClassName("error")[0].scrollIntoView();
        return false;
    };

    static validatePersonalInformation = (inputElements) => {
        const firstNameValue = inputElements.firstName.value.trim();
        const lastNameValue = inputElements.lastName.value.trim();
        const emailValue = inputElements.email.value.trim();
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

        if (emailValue === "") {
            this.setError(inputElements.email, "Email is required");
            numberOfErrors++;
        } else if (!this.isValidEmail(emailValue)) {
            this.setError(inputElements.email, "Provide a valid email address");
            numberOfErrors++;
        } else {
            this.setSuccess(inputElements.email);
        }

        return numberOfErrors;
    };

    static validateAddress = (inputElements) => {
        const addressValue = inputElements.address.value.trim();
        const zipValue = inputElements.zip.value.trim().replaceAll(" ", "");
        const cityValue = inputElements.city.value.trim();
        const countryValue = inputElements.country.value.trim();
        const telephoneValue = inputElements.telephone.value
            .trim()
            .replaceAll(" ", "");
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

        if (telephoneValue[0] === "0") {
            telephoneValue = `+421${telephoneValue.substring(1)}`;
        }
        if (telephoneValue === "") {
            this.setError(inputElements.telephone, "Telephone is required");
            numberOfErrors++;
        } else if (!this.isValidTelephone(telephoneValue)) {
            this.setError(
                inputElements.telephone,
                "Provide a valid telephone number"
            );
            numberOfErrors++;
        } else {
            this.setSuccess(inputElements.telephone);
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

    static isValidEmail = (email) => {
        const re =
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    };

    static isValidTelephone = (telephone) => {
        return /^\+421[0-9]{9}$/.test(telephone);
    };

    static isValidZip = (zip) => {
        return /(^\d{5}$)|(^\d{5}-\d{4}$)/.test(zip);
    };
}
