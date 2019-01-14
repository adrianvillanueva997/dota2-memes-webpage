<?php
include "db.php";
include "utilities.php";

function get_name($id)
{
    $conn = connect_to_db();
    $sql_query = "SELECT `name` from `ashamed`" . " WHERE id Like $id";
    $result = $conn->query($sql_query);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
        }
        return $name;
    } else {
        return null;
    }
}

function get_bio($id)
{
    $conn = connect_to_db();
    $sql_query = "SELECT `bio` from `ashamed`" . " WHERE id Like $id";
    $result = $conn->query($sql_query);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            $bio = $row['bio'];
        }
        return $bio;
    } else {
        return null;
    }
}