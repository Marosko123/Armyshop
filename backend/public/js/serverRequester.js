const apiUrl = "http://127.0.0.1:8000/api";

class ServerRequester{
    static postToUrl = async function (subroute, bodyData) {
        try {
            return (
                await fetch(apiUrl + subroute, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify(bodyData),
                })
            ).json();
        } catch (error) {
            console.log(error);
        }
    };

    static putToUrl = async function (subroute, bodyData) {
        try {
            return (
                await fetch(apiUrl + subroute, {
                    method: "PUT",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify(bodyData),
                })
            ).json();
        } catch (error) {
            console.log(error);
        }
    };
    
    static getFromUrl = async function (subroute) {
        try {
            return (
                await fetch(apiUrl + subroute, {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",
                    },
                })
            ).json();
        } catch (error) {
            console.log(error);
        }
    };
    
    static deleteFromUrl = async function (subroute) {
        try {
            return (
                await fetch(apiUrl + subroute, {
                    method: "DELETE",
                    headers: {
                        "Content-Type": "application/json",
                    },
                })
            ).json();
        } catch (error) {
            console.log(error);
        }
    };
}

