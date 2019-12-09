<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $user = $_SESSION['username'];
    $sql = "SELECT * FROM profiles WHERE username ='$user';";

    $result = $connect->query($sql);
    if($result->num_rows > 0) {
        while($item = $result->fetch_assoc()) {
        echo '
            <div class="">
                <img class="img-fluid" src="./img/' . $item['profile_img'] . '" alt="photo of user" />
                <div class="blue-bg text-center py-3">
                    <p>Welcome</p>
                    <h5 class="font-weight-bolder">' . $item['username'] . '!</h5>
                </div>
            </div>
        
        ';
        }

    } else {
        echo '<div class="blk-md-text">Profile not available</div>';
    }