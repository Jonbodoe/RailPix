<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $post = $_GET["post"];
    $user = $_SESSION['username'];

    $sql = "SELECT profiles.profile_id, profiles.username, posts.post_id , comments.*
        FROM profiles
        JOIN posts on (posts.post_id = $post)
        JOIN comments on (comments.post_ref = $post)
        WHERE profiles.profile_id = comments.user_ref
    ";

        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
            while ($item = $result->fetch_assoc()) {
                if ($user == $item['username']) {
                    echo '
                        <div class="py-1 d-flex justify-content-between">
                            <div class="text-left">
                                <div class="pr-3 text-black">' . $item["username"] . '</div>
                                <div class="pr-3">' . $item["comment_message"] . '</div>  
                            </div>     
                            <div class="text-right">
                                <a href="commentEdit.php?post=' . $post . '&edit=' . $item["comment_id"] . '"><i class="fa fa-pencil"></i></a><br/>
                            </div>     
                        </div> 
                    '; 
                    } else {
                    echo '
                        <div class="py-1 d-flex justify-content-between">
                            <div class="text-left">
                                <div class="pr-3 text-black">' . $item["username"] . '</div>
                                <div class="pr-3">' . $item["comment_message"] . '</div>  
                            </div>
                            <div class="text-right">
                            <a class="blk-md-text" href="#"><i class="fa fa-flag"></i></i></a><br/>
                            </div>          
                        </div> 
                    ';
                    }
                }
        } else {
            if (!isset($_POST['display'])) {
                echo "make a comment!";
            }
        }