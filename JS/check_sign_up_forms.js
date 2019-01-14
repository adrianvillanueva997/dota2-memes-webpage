$(document).ready(function () {

});

function check_fields() {
    let username = $("#username").valueOf();
    let email = $("#email").valueOf();
    let password = $("#password").valueOf();

    if (username === null) {
        alert("Please insert a valid username");
    } else if (email === null) {
        alert("Please insert a valid email");
    } else if (password === null) {
        alert("Please insert a valid password");
    } else {
        $.post("../PHP/sign_up.php", {
            'username': username,
            'email': email,
            'password': password
        }, function (data, status) {
            if (status === "success") {
                console.log("Everything was ok, kappa");
            } else {
                console.log("Error");
            }
        });
    }

}
