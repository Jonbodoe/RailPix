<?php
require 'dbConn.php';
$user = $_SESSION['username'];
$sql = "SELECT profiles.profile_id, profiles.username, profiles.profile_img, posts.*
        FROM profiles JOIN posts ON (profiles.profile_id = posts.user_id)
        WHERE profiles.username ='$user';
        ";

$result = $connect->query($sql);
if($result->num_rows > 0) {
    echo '
        <div class="px-2">
            <div class="row px-md-2">Total posts : ' . $result->num_rows . '</div>
        </div>
        ';
    while($item = $result->fetch_assoc()) {
        echo '
        <div class="card m-3 d-inline-block" style="max-width: 26.5rem;">
            <div class="card-header py-3 blue-bg text-white shadow">' . $item['username'] . '</div>
            <img class="card-img-top" src="./img/'. $item['img_str'] .'" alt="Card image cap">
            <div class="card-body blk-md-text">
                <h4 class="card-title">' . $item['category'] . '</h4>
                <p class="card-text">' . $item['details'] .'</p>
            </div>
        </div>
        ';
    }
} else {
    echo "oh no";
}




