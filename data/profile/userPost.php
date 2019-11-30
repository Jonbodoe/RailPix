<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $post = $_GET["post"];
    $user = $_SESSION['username'];

    $sql = "SELECT profiles.profile_id, profiles.username, profiles.profile_img, posts.*, comments.post_ref
            FROM profiles 
            JOIN posts on (posts.post_id = $post)
            JOIN comments on (comments.post_ref = $post)
            WHERE profiles.username ='$user'
            LIMIT 1;
    ";

    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        // print_r($result);
        photoInfo($result);

    } 
    else {
        echo 'error, please login or reload page';
    }

    function photoInfo($info) {
        while ($item = $info->fetch_assoc()) {
            echo '
                <div class="py-3">
                    <img class="circle img-md-mini" src="./img/' . $item['profile_img'] . '" alt="photo of user"/>
                </div>
                <div class="font-weight-bold">
                    ' . $item["username"] . '
                </div>
            ';
            // print_r($item);
        }
    }
?>