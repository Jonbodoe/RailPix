<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $post = $_GET['post'];

    $sql = "SELECT * FROM profiles WHERE username ='$user';";

    $sql = "SELECT profiles.*, posts.user_id FROM profiles
            JOIN posts ON posts.post_id = $post
            WHERE profiles.profile_id = posts.user_id";

    
    $result = $connect->query($sql);
        if($result->num_rows > 0) {
            while($item = $result->fetch_assoc()) {
            echo '
                <div class="h-100">
                    <img class="img-fluid" src="./img/' . $item['profile_img'] . '" alt="photo of user" />
                    <div class="blue-bg text-center align-self-center py-3">
                        <h5 class="font-weight-bolder">' . $item['username'] . '</h5>
                    </div>
                    <div class="p-4">
                        <div class="font-weight-bolder">Name</div>
                        <p class="wht-md-text">' . $item['name'] . '</p>
                        <div class="font-weight-bolder">Bio</div>
                        <p class="wht-md-text">' . $item['bio'] . '</p>
                        <div class="font-weight-bolder">Last Activity</div>
                        <p class="wht-md-text">' . $item['last_login'] . '</p>
                    </div>
                </div>
            
            ';
            }

        } else {
            echo '<div class="blk-md-text">No posts available</div>';
        }
