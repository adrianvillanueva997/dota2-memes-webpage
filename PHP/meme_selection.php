<?php
include "db.php";
include "utilities.php";

/**
 * random_meme
 *
 * @return array
 */
function random_meme()
{
    $conn = connect_to_db();
    $sql_query = "SELECT * from memes order by rand() limit 1";
    $result = $conn->query($sql_query);
    $meme_info = array();
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            $meme_path = $row['meme_path'];
            $meme_id = $row['id'];
            array_push($meme_info, $meme_id);
            array_push($meme_info, $meme_path);
        }
        return $meme_info;
    } else {
        return null;
    }
}

?>