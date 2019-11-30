<?php 
    require (dirname(__FILE__).'/../dbConn.php');

    $sql = "SELECT posts.* , types.*, profiles.profile_id, profiles.username, profiles.profile_img FROM posts 
            JOIN types ON posts.category = types.type_id
            JOIN profiles on posts.user_id = profiles.profile_id
            LIMIT 4";
    $result = $connect->query($sql);
        if($result->num_rows > 0) {
            while($item = $result->fetch_assoc()) {
                echo '
                <div class="card m-3 d-inline-block" style="max-width: 20rem;">
                    <div class="card-header blue-bg shadow d-flex flex-row">
                        <img class="img-mini" src="./img/'. $item['profile_img'] .'" alt="photo of user"/>
                        <div class="align-self-center px-3">' . $item['username'] . '</div>
                    </div>
                    <img class="card-img-top" src="./img/'. $item['img_str'] .'" alt="Card image cap">
                    <div class="card-body blk-md-text">
                        <h4 class="card-title">' . $item['type_freight'] . '</h4>
                        <p class="card-text">' . $item['details'] .'</p>
                    </div>
                </div>
                ';
            }
        } else {
            echo '<div class="blk-md-text">No posts available</div>';
        }
?>

<!-- WHEN FILTERING JUST CHANGE THE wHERE SECTION -->