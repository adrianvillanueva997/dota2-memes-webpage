<?php
include "../PHP/utilities.php";
include "../PHP/db.php";

if (isset($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $password2 = $_REQUEST['password2'];
    console_log($username);

	$conn = connect_to_db();
    $sql_query = "SELECT * from `users`" . " WHERE username Like '$username'";
    $result = $conn->query($sql_query);
    if ($result->num_rows > 0) {
        phpAlert("Username is already taken");
	} else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql_query = "INSERT INTO users (`username`, `email`, `password`)" . " VALUES ('$username' ,'$email' ,'$password');";
        if ($conn->query($sql_query) === true) {
            console_log("Inserted data succesfully");
        } else {
            console_log($conn->error);
        }
    }

}

?>