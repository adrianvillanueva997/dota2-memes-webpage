<?php
include "../PHP/utilities.php";
include "../PHP/db.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_REQUEST['password'];
    $verified_password = "";
    if ($username == null) {
        phpAlert("Username not valid");
    } else if ($password == null) {
        phpAlert("Password not valid");
    } else {
        $conn = connect_to_db();
        $sql_query = "SELECT * from `users`" . " WHERE username Like '$username'";
        $result = $conn->query($sql_query);
        if ($result->num_rows == 1) {
            while ($row = $result->fetch_assoc()) {
                $verified_password = password_verify($password, $row['password']);
                console_log($verified_password);
            }
        } else {
            phpAlert("User not found");
        }
    }
}