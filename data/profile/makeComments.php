<?php
require (dirname(__FILE__).'/../dbConn.php');


$user = $_SESSION['username'];
$post = $_GET["post"];
$comment = $_POST['comment'];
$date = date("Y-m-d H:i:s");

$query = "SELECT profiles.profile_id, profiles.username, posts.id
FROM profiles 
JOIN posts on (posts.id = $post)
WHERE profiles.username ='$user' 
";

$result = $connect->query($query);
if ($result->num_rows > 0) {
    while ($item = $result->fetch_assoc()) {
        $user_id = $item['profile_id'];
        $blog_id = $item['id'];
    }
} else {
    echo 'didnt work';
}
$user = $user_id;
$blog = $blog_id;

if ($_POST['comment']) {
    $sql = "INSERT INTO railpix.comments (comment_id, user_ref, post_ref, comment_message, comment_date)
        VALUES (NULL, '" . $user . "','" . $blog . "','" . $comment . "','" . $date . "')";
    $set = $connect->query($sql);
    if (!$set) {
        die('Something went wrong.');
    } elseif ($result) {
        echo "added comment!";
    }
}

// $date = date("Y-m-d H:i:s");



?>