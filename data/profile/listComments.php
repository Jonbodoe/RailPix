<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $post = $_GET["post"];
    $edit = $_GET["edit"];
    $user = $_SESSION['username'];

    $sql = "SELECT profiles.profile_id, profiles.username, profiles.profile_img, posts.id, comments.*
    FROM profiles 
    JOIN posts on (posts.id = $post)
    JOIN comments on (comments.post_ref = $post)
    WHERE profiles.username ='$user'
    ";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        while ($item = $result->fetch_assoc()) {
            echo '
                <div class="row py-1 d-flex justify-content-between">
                    <div>
                        <div class="pr-3 text-black">' . $item["username"] . '</div>
                        <div class="pr-3">' . $item["comment_message"] . '</div>  
                    </div>     
                    <div class="text-right">
                        <a href="commentEdit.php?post=' . $post . '&edit=' . $item["comment_id"] . '"><i class="fa fa-pencil"></i></a><br/>
                    </div>     
                </div> 
            ';
            

    }

    } else {
        echo 'error, please login or reload page';
    }


