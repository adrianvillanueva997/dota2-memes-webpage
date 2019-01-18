<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="../resources/img/favicon.png"/>
    <link rel="stylesheet" href="../css/styles.css">
	
	<?php
	include "../PHP/fill_ashamed.php";
	$meme = get_ashamed_memes(0)
	?>
	
    <title>Dota 2</title>

    <script>
        $(function () {
            $('#navigatorbar').load('nav_bar.html')
        });
    </script>
</head>
<body>
<div id="dota2">
    <a href="dota2.php"><h1>Dota 2</h1></a>

    <div id="navigatorbar">

    </div>
	<div id="furthermemes">
        <div class="memebox">
            <div class="memename">
                 Name of the meme
            </div>
            <div class="meme">
                <img src="<?php echo $meme; ?>"
                         alt="Random meme">
            </div>
            <div class="memebuttons">
                <img src="../resources/img/hearticon.png"
                    alt="Preserved heart of an extinct monster, it bolsters the bearer's fortitude. ">
            </div>
        </div>
	</div>
</div>
</body>
</html>