<?php
    require (dirname(__FILE__).'/../dbConn.php');
    
    $user = $_SESSION['username'];
    $sql = "SELECT * FROM profiles WHERE username ='$user';";
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
            echo '<div class="blk-md-text">Profile not available</div>';
        }

    // ISSUE CANNOT KEEP GET VARIABLE FROM LOGIN TO STAY IN EACH PAGE AFTER INITIAL LOGIN.
