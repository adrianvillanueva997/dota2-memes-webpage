<?php
include "../PHP/utilities.php";
include "../PHP/db.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    console_log($username);
    if ($username == null) {
        phpAlert("Username not valid");
    } else if ($email == null) {
        phpAlert("Email not valid");
    } else if ($password == null) {
        phpAlert("Password not valid");
    } else {
        $conn = connect_to_db();
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql_query = "INSERT INTO users (`username`, `email`, `password`)" . " VALUES ('$username' ,'$email' ,'$password');";
        if ($conn->query($sql_query) === TRUE) {
            console_log("Inserted data succesfully");
        } else {
            console_log($conn->error);
        }
    }
}