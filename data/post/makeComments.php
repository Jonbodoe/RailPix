<?php
require (dirname(__FILE__).'/../dbConn.php');


$user = $_SESSION['username'];
$post = $_GET["post"];
$comment = $_POST['comment'];
$date = date("Y-m-d H:i:s");

$query = "SELECT profiles.profile_id, profiles.username, posts.post_id
FROM profiles 
JOIN posts on (posts.post_id = $post)
WHERE profiles.username ='$user' 
";

$result = $connect->query($query);
if ($result->num_rows > 0) {
    while ($item = $result->fetch_assoc()) {
        $user_id = $item['profile_id'];
        $blog_id = $item['post_id'];
    }
} else {
    echo 'didnt work';
}

$user = $user_id;
$blog = $blog_id;

if ($_POST['comment']) {
    $sql = $connect->prepare("INSERT INTO railpix.comments (comment_id, user_ref, post_ref, comment_message, comment_date)
        VALUES (NULL, '" . $user . "','" . $blog . "', ? ,'" . $date . "')");
    $sql->bind_param('s', $comment);
    $sql->execute();

    if (!$sql) {
        die('Something went wrong.');
    } elseif ($sql) {
        echo "<br>added comment!";
    }
}

?>