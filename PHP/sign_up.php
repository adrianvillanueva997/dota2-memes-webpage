<?php
include "../PHP/utilities.php";
include "../PHP/db.php";

if (isset($_POST['submit'])) {
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $password2 = $_REQUEST['password2'];
    console_log($username);
    if ($username == null) {
        phpAlert("Username not valid");
    } else if ($email == null) {
        phpAlert("Email not valid");
    } else if ($password == null) {
        phpAlert("Password not valid");
    } else if ($password2 == null) {
        phpAlert("Please write your password again");
    } else if ($password == $password2) {
        $conn = connect_to_db();
        $sql_query = "SELECT * from `users`" . " WHERE username Like '$username'";
        $result = $conn->query($sql_query);
        if ($result->num_rows > 0) {
            phpAlert("Username is already taken");
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql_query = "INSERT INTO users (`username`, `email`, `password`)" . " VALUES ('$username' ,'$email' ,'$password');";
            if ($conn->query($sql_query) === TRUE) {
                console_log("Inserted data succesfully");
            } else {
                console_log($conn->error);
            }
        }
    } else {
        phpAlert("Passwords don't match");
    }
}