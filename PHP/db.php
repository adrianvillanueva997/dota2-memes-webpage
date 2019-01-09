<?php
$servername = "51.15.70.19";
$username = "proyecto_final_web";
$password = "dota2";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
return $conn;