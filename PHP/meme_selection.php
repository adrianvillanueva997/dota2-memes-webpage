<?php
include "db.php";
include "utilities.php";

function random_meme()
{
    $conn = connect_to_db();
    $sql_query = "SELECT * from desarrollo_web.memes order by rand() limit 1";
    $result = $conn->query($sql_query);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            $meme_path = $row['meme_path'];
        }
        return $meme_path;
    } else {
        return null;
    }
}

?>