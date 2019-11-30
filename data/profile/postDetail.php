<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $post = $_GET["post"];
    $user = $_SESSION['username'];

    $sql = "SELECT profiles.profile_id, profiles.username, profiles.profile_img, posts.*
        FROM profiles
        JOIN posts on (posts.post_id = $post)
        WHERE posts.user_id = profiles.profile_id
    ";

    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        while ($item = $result->fetch_assoc()) {
            if (!$imageContent) {
            echo '
                <div>
                    <img class="img-fluid" src="./img/' . $item["img_str"] . '" alt="' . $item["details"] . '"/>
                    <div class="d-flex blk-md-text">
                        <div class="p-4" style="max-width:10rem">
                            <img class="circle img-md-mini" src="./img/' . $item['profile_img'] . '" alt="photo of user"/>
                        </div>
                        <div class="p-4 text-left w-100 light-bg">
                            <div class="py-2">
                                <div class="font-weight-bold">
                                    ' . $item["username"] . '
                                </div>
                                <div>' . $item['details'] . '</div>
                                <div id="edit" class="blk-md-text text-right">
                                    edit
                                </div>
                            </div>
                            <div class="font-weight-bold">
                                Comments
                            </div>';
            }
    }
    } else {
        echo 'error, please login or reload page';
    }
