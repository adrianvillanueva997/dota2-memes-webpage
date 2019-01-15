$(document).ready(function () {
	    $("#submitsignup").click(function () {
        check_fields();
    });
});

function check_fields() {
	
	
    var username = $("#username").val();
    var email = $("#email").val();
    var pwd = $("#password").val();
	var pwd2 = $("#password2").val();

	console.log("everything is working");
    if (!username) {
        alert("Please insert a valid username");
    } else if (!email) {
        alert("Please insert a valid email");
    } else if (!pwd) {
        alert("Please insert a valid password");
    } else if (pwd2 != pwd){
		alert("The passwords must match");
	}else {
		
        $.post('../html/sign_up.php', {
            'username': username,
            'email': email,
            'password': pwd,
			'password2': pwd2
        }, function (data, status) {
            if (status === "success") {
                console.log("Everything was ok, kappa");
            } else {
                console.log("Error");
            }
        });
		
    }

}
