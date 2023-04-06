const apiUrl = "http://127.0.0.1:8000/api";

postToUrl = async function (subroute, bodyData) {
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