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
	include "../PHP/meme_selection.php";
	$meme = random_meme()
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
	<div id ="frontpage">
		<div id ="frontdescription">
			<h3>Welcome to Dota</h3>
			<h4>Pick Phase</h4> Return to the main page and choose your preferred game
			<h4>Knows Your Memes</h4> An in-depth look at both Dota 2 and Artifact. Start here if you don't know what this site is about!
			<h4>Hall of Shame</h4> Our Compendium (PogChamp) of Dota 2's most celebrated individuals
			<h4>Further Memery</h4> More memes, unrelated to specific individuals
			<h4>Sign up</h4> What do you think this does?
			<h4>Log in</h4> Be part of our community!
			<h4>Random meme</h4>
		</div>
	
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