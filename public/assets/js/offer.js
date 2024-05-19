const duration=24 * 60 * 60 * 1000;
const days=1;
$(document).ready(function () {
    // Function to get a cookie by name
    function getCookie(name) {
        let value = "; " + document.cookie;
        let parts = value.split("; " + name + "=");
        if (parts.length === 2) return parts.pop().split(";").shift();
    }

    // Function to set a cookie
    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            let date = new Date();
            date.setTime(date.getTime() + (days * duration));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    // Check if the offer has been shown today
    let offerShown = getCookie("offerShown");


    if (!offerShown) {
        // Show the modal
        $('#offerModal').modal('show');
        // Set the cookie to remember the offer has been shown today
        setCookie("offerShown", "true", days);
    }
});
