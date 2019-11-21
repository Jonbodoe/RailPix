<?php
require (dirname(__FILE__).'/../dbConn.php');

$user = $_SESSION['username'];
$sql = "SELECT profiles.profile_id, profiles.username, profiles.profile_img, posts.*
        FROM profiles JOIN posts ON (profiles.profile_id = posts.user_id)
        WHERE profiles.username ='$user';
        ";

$result = $connect->query($sql);
if ($result->num_rows > 0) {
    while ($item = $result->fetch_assoc()) {
        echo '
        <a class="post-container" href="post.php?post='. $item['id'] .'">
            <div class="post card m-4 d-inline-block no-border shadow-sm" style="max-width: 22rem;">
                <div class="card-header shadow d-flex flex-row">
                    <img class="img-mini" src="./img/jonbodoe.jpg" alt="photo of user"/>
                    <div class="align-self-center px-3">' . $item['username'] . '</div>
                </div>
                <img class="card-img-top" src="./img/' . $item['img_str'] . '" alt="Card image cap">
                <div class="card-body blk-md-text py-3">
                    <p class="card-text">' . $item['details'] . '</p>
                </div>
                <div class="card-footer blk-md-text">' . $item['category'] . '</div>
            </div>
        </a>
        ';
    }
    isOdd($result->num_rows);
} else {
    echo "oh no";
}

function isOdd($posts)
{
    if ($posts % 2 == 1) {
        echo '
            <div id="add-photo" class="add post white-bg m-4 d-inline-block no-border shadow-sm d-flex" style="width: 22rem; border-radius: .25rem">
                <div class="add text-center blk-md-text w-100 align-self-center">
                    <img class="add img-quarter p-4 m-1 opacity" src="./img/cross-blk.png" alt="photo of a plus sign to add photo"/>
                    <div class="add">Add Photo</div>
                </div>
            </div>
        ';
    }
}
