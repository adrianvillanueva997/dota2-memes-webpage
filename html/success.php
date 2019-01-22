<!DOCTYPE html>
<?php
include("../PHP/auth.php");
?>
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

    <script>
        $(function () {
            $('#navigatorbar').load('nav_bar.php')
        });
    </script>
</head>
<body>
<div id="dota2">
    <a href="dota2.php"><h1>Dota 2</h1></a>

    <div id="navigatorbar">

    </div>

</div>


<div id="log_in_confirm">
	<div id="welcome"></div>
	<p>Welcome back to the International, 
	
	<?php
		echo $_SESSION['username']
	?></p>
	<img src="../resources/img/gaben.png" alt="God">
	
</div>

<input type="hidden" id="check" value="none">

</body>
</html>

