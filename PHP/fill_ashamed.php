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
function get_bio_pic($id)
{
    $conn = connect_to_db();
    $sql_query = "SELECT `bio_pic` from `ashamed`" . "WHERE id like $id";
    $result = $conn->query($sql_query);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            $bio_pic = $row['bio_pic'];
        }
        return $bio_pic;
    } else {
        return null;
    }
}

function get_video_url($id)
{
    $conn = connect_to_db();
    $sql_query = "SELECT `ashamed_video` from `ashamed`" . "WHERE id like $id";
    $result = $conn->query($sql_query);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            $ashamed_video = $row['ashamed_video'];
        }
        return $ashamed_video;
    } else {
        return null;
    }
}

function get_ashamed_memes($id)
{
    $conn = connect_to_db();
    $sql_query = "select * from desarrollo_web.ashamed person join desarrollo_web.memes meme on meme.ashamed_id = person.id where person.id like ". $id;
    $result = $conn->query($sql_query);
    $meme_list = array();
    if ($result->num_rows > 1) {
        while ($row = $result->fetch_assoc()) {
            $meme_path = $row['meme_path'];
            array_push($meme_list,$meme_path);
        }
        $length = count($meme_list);
        $random_meme = $meme_list[rand(0,$length-1)];
        console_log($random_meme);
        return $random_meme;
    } else {
        return null;
    }

}