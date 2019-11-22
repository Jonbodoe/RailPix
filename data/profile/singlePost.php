<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $post = $_GET["post"];
    $user = $_SESSION['username'];

    $sql = "SELECT profiles.profile_id, profiles.username, profiles.profile_img, posts.*, comments.*
        FROM profiles 
        JOIN posts on (posts.id = $post)
        JOIN comments on (comments.post_ref = $post)
        WHERE profiles.username ='$user'
        LIMIT 1;
        ";

    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        while ($item = $result->fetch_assoc()) {
            echo '
                <div class="row px-md-5 mt-4" style="max-width: 53rem">
                    <div class="white-bg shadow">
                        <div class="d-flex flex-md-row flex-md-nowrap">
                            <div class="py-3 mt-3" style="min-width:10rem">
                                <div class="py-3">
                                    <img class="circle img-md-mini" src="./img/' . $item['profile_img'] . '" alt="photo of user"/>
                                </div>
                                <div class="font-weight-bold">
                                    ' . $item["username"] . '
                                </div>
                            </div>
                            <div class="light-bg" style="min-width:30rem">
                                <img class="img-fluid" src="./img/' . $item["img_str"] . '" alt="' . $item["details"] . '"/>
                                <div class="text-left p-3 blk-md-text">
                                    <div class="font-weight-bold ">Description</div>
                                    <div>' . $item['details'] . '</div>
                                    <div id="edit" class="blk-md-text text-right">
                                        edit
                                    </div>
                                    <div id="comment" class="font-weight-bolder">Comments</div>
                                    <div id="makeComment" class="hidden">
                                        <div>hello</div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }
    } else {
        echo 'errorrrr';
    }
?>