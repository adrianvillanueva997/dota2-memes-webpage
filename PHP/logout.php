<?php
include("../PHP/auth.php");
if(isset($_REQUEST['logoutrequest'])){
	session_destroy();
	die();
}
?>