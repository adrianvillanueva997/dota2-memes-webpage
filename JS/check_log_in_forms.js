$(document).ready(function () {
	    $("#submitlogin").click(function () {
        check_login();
    });
	
	document.getElementById("log_in_confirm").style.display="none";
});

function check_login() {
	
	
    var username = $("#username").val();
    var pwd = $("#password").val();
	let hide = document.getElementById("log_in_form");
	let confirmed = document.getElementById("log_in_confirm");

	console.log("everything is working");
    if (!username) {
        alert("Please insert a valid username");
    } else if (!pwd) {
        alert("Please insert a valid password");
    } else {
		
        $.post('../html/login.php', {
            'username': username,
            'password': pwd
        }, function (data, status) {
            if (status === "success") {
                console.log("Everything was ok, kappa");
				var aa = '<%= Session["SessionKey"] %>'
				console.log(aa);
				hide.style.display = "none";
				document.getElementById("welcome").innerHTML = "Welcome to the International, "+username;
				confirmed.style.display = "block";

				
            } else {
                console.log("Error");
            }
        });
		
    }

}
