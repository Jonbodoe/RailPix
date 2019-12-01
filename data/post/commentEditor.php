<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $post = $_GET["post"];
    $edit = $_GET["edit"];
    $user = $_SESSION['username'];
    $comment = $_POST['comment'];
    $change = $_POST['change'];
    $delete = $_POST['delete'];

    if (isset($change)) {
        $sql = "UPDATE comments SET comment_message = '". $comment ."' WHERE comment_id = ". $edit ."";
        $result = $connect->query($sql);
        if (!$result) {
            die('Something went wrong.');
        } else {
            echo "edit applied!";
        }
    } elseif (isset($delete)) {
        $sql = "DELETE FROM comments WHERE comment_id = ". $edit ."";
        $result = $connect->query($sql);
        if (!$result) {
            die('Something went wrong.');
        } else {
            echo "comment deleted!";
        }
    }


