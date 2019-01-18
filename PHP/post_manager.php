<?php
include "db.php";
include "utilities.php";
include "auth.php";


if (isset($_REQUEST['like'])) {
    if (isset($_REQUEST['meme_id'])) {
        $username = $_SESSION['username'];
        $meme_id = $_POST['meme_id'];
        $id = get_user_id($username);
        $post_status = check_liked_post($id, $meme_id);
        if ($post_status === true) {
            update_post($id, $meme_id, $post_status, 1);
        } else {
            update_post($id, $meme_id, $post_status, 1);
        }
    }
} else if (isset($_POST['dislike'])) {
    if (isset($_REQUEST['meme_id'])) {
        $username = $_SESSION['username'];
        $meme_id = $_POST['meme_id'];
        $id = get_user_id($username);
        $post_status = check_liked_post($id, $meme_id);
        if ($post_status === true) {
            update_post($id, $meme_id, $post_status, 0);
        } else {
            update_post($id, $meme_id, $post_status, 0);
        }

    }
}

/**
 * get_user_id
 *
 * @param  string $username
 *
 * @return int
 */
function get_user_id($username)
{
    $conn = connect_to_db();
    $sql_query = "SELECT * from users where username = '" . $username . "'";
    $result = $conn->query($sql_query);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            $user_id = $row['id'];
        }
        return $user_id;
    } else {
        return null;
    }
}
/**
 * check_liked_post
 *
 * @param  mixed $user_id
 * @param  mixed $meme_id
 *
 * @return bool
 */
function check_liked_post($user_id, $meme_id)
{
    $conn = connect_to_db();
    $sql_query = "SELECT * from meme_votes where user_id like " . $user_id . " and meme_id like " . $meme_id;
    $result = $conn->query($sql_query);
    if ((mysqli_num_rows($result) > 0)) {
        return true;
    } else {
        return false;
    }

}

/**
 * update_post
 *
 * @param  mixed $user_id
 * @param  mixed $meme_id
 * @param  mixed $status
 *
 * @return void
 */
function update_post($user_id, $meme_id, $status, $value)
{
    $conn = connect_to_db();
    if ($status === true) {
        $sql_query = "UPDATE meme_votes set status = " . $value . " where user_id like " . $user_id . " and meme_id like " . $meme_id;
        if ($conn->query($sql_query) === true) {
            console_log("He actualizado");
        } else {
            console_log("aqui");
        }

    } else {
        $sql_query = "INSERT into meme_votes (meme_id,user_id,status) VALUES ( " . $meme_id . " , " . $user_id . ",  $value )";
        console_log($sql_query);
        if ($conn->query($sql_query) === true) {
            console_log("he instertado");
        } else {
            console_log("no he insertao");
        }
    }
}

?>
