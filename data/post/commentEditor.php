<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $post = $_GET["post"];
    $edit = $_GET["edit"];
    $user = $_SESSION['username'];
    $comment = $_POST['comment'];
    $change = $_POST['change'];
    $delete = $_POST['delete'];

    $sql = "SELECT posts.details, posts.post_id, comments.* FROM posts JOIN comments ON (posts.post_id = comments.post_ref) WHERE $edit = comments.comment_id";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        while ($item = $result->fetch_assoc()) {
            echo "<p class='py-3 white-bg borderRadius mt-3'>". $user .": ". $item['comment_message'] . "</p>";
        }
    } else {
        echo 'please try again';
    }
    if (isset($change)) {
        $sql = "UPDATE comments SET comment_message = '". $comment ."' WHERE comment_id = ". $edit ."";
        $result = $connect->query($sql);
        if (!$result) {
            die('Something went wrong.');
        } else {
            echo "<p class='link py-3 blue-bg text-white borderRadius mt-3'>edit applied! click <a href='post.php?post=" . $post . "'>here</a> to go back</p>";
            // echo "<div>click <a href='post.php?post=" . $post . "'>here</a> to go back</div>";
        }
    } elseif (isset($delete)) {
        $sql = "DELETE FROM comments WHERE comment_id = ". $edit ."";
        $result = $connect->query($sql);
        if (!$result) {
            die('Something went wrong.');
        } else {
            echo "comment deleted!";
            echo "<p class='link py-3 blue-bg text-white borderRadius mt-3'>comment deleted! click <a href='post.php?post=" . $post . "'>here</a> to go back</p>";
        }
    }


