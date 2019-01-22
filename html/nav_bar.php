<!DOCTYPE html>
<?php
include("../PHP/auth.php");
?>
<html lang="en">
<script>
$(document).ready(function(){
	$("#logoutbar").click(function(){
			$.post("../PHP/logout.php",{
				'logoutrequest':1},
				function(data, status){
						window.location.href= "dota2.php";
						console.log(status);
				});
	});
});
</script>
<body>
<div id="navigatorbar">
    <div id="navigatoritem">
        <a href="../index.html">Pick Phase</a>
    </div>
    <div id="navigatoritem">
        <a href="about.html">Know Your Memes</a>
    </div>
    <div id="navigatoritem">
        <a href="hallofshame.php">Hall of Shame</a>
    </div>
    <div id="navigatoritem">
        <a href="furthermemery.php">Further Memery</a>
    </div>
	<?php
	if(!isset($_SESSION["username"])){
	?>
    <div id="navigatoritem">
        <a href="sign_up.html">Sign up</a>
    </div>
    <div id="navigatoritem">
        <a href="login.php">Log in</a>
    </div>
	<?php
	}else{
	?>
	<div id="navigatoritem">
		<input type="button" id="logoutbar"><a href="">Log out of <?php echo $_SESSION['username'];?></a>
	</div>
	<?php
	}
	?>
</div>

</body>
</html>