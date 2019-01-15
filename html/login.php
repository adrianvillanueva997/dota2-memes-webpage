<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="../resources/img/favicon.png"/>
    <link rel="stylesheet" href="../css/styles.css">
	<!-- <script src="../JS/check_log_in_forms.js"></script> -->

    <script>
        $(function () {
            $('#navigatorbar').load('nav_bar.html')
        });
    </script>
</head>
<body>
<div id="dota2">
    <a href="dota2.html"><h1>Dota 2</h1></a>

    <div id="navigatorbar">

    </div>

</div>
<?php
include "../PHP/utilities.php";
include "../PHP/db.php";

session_start();

if (isset($_REQUEST['username'])) {
        // removes backslashes
	$conn = connect_to_db();
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
        $sql_query = "SELECT * from `users`" . " WHERE username Like '$username'";
        $result = $conn->query($sql_query);
        if ($result->num_rows == 1) {
			while ($row = $result->fetch_assoc()) {
                $verified_password = password_verify($password, $row['password']);
                console_log($verified_password);
				if($verified_password){
					$_SESSION['username'] = $username;
					// Redirect user to index.php
					header("Location: success.php");
				}else{
						echo "<div id='incorrectlogin'>
						<h3>Username/password is incorrect.</h3>
						<br/>Click here to <a href='login.php'>Login</a></div>";
				}
            }



         }else{
	echo "<div id='incorrectlogin'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
}else{

</html>

