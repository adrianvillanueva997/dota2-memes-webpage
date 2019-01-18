<?php
/**
 * connect_to_db
 *
 * @return $conn
 */
function connect_to_db()
{
    $servername = "51.15.70.19";
    $username = "proyecto_final_web";
    $password = "dota2";
    $database = "desarrollo_web";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        return null;
    }
    return $conn;
}

