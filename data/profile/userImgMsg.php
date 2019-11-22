<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $post = $_GET["post"];
    $user = $_SESSION['username'];

    $sql = "SELECT profiles.profile_id, profiles.username, profiles.profile_img, posts.*, comments.post_ref
        FROM profiles 
        JOIN posts on (posts.id = $post)
        JOIN comments on (comments.post_ref = $post)
        WHERE profiles.username ='$user'
        LIMIT 1;
        ";

    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        // print_r($result);
        photoImg($result);

    } 
    else {
        echo 'error, please login or reload page';
    }

    function photoImg($info) {
        while ($item = $info->fetch_assoc()) {
            echo '
                <img class="img-fluid" src="./img/' . $item["img_str"] . '" alt="' . $item["details"] . '"/>
                <div class="text-left p-3 blk-md-text">
                    <div>
                        <div class="font-weight-bold text-black">Description</div>
                        <div>' . $item['details'] . '</div>
                        <div id="edit" class="blk-md-text text-right">
                            edit
                        </div>
                    </div>
                </div>
            ';
            // print_r($item);
        }
    }