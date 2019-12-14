<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $post = $_GET["post"];
    $user = $_SESSION['username'];

    $sql = "SELECT profiles.profile_id, profiles.username, profiles.profile_img, posts.*, types.*, divisions.*, states.*
        FROM profiles
        JOIN posts on (posts.post_id = $post)
        JOIN types on (types.type_id = posts.category)
        JOIN divisions on (divisions.division_id = posts.division_ref)
        JOIN states on (states.state_id = posts.state_ref)
        WHERE posts.user_id = profiles.profile_id
    ";

    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        while ($item = $result->fetch_assoc()) {
            // print_r($item);
            if (!$imageContent) {
            echo '
                <div>
                    <img class="img-fluid" src="./img/' . $item["img_str"] . '" alt="' . $item["details"] . '"/>
                    <div class="d-flex">
                        <div class="p-4" style="max-width:10rem">
                            <img class="circle img-md-mini" src="./img/' . $item['profile_img'] . '" alt="photo of user"/>
                        </div>
                        <div class="p-4 text-left w-100 light-bg">
                            <div class="py-3">
                                <div class="font-weight-bolder py-1">
                                    ' . $item["username"] . '
                                </div>
                                <div class="">' . $item['details'] . '</div>
                                <div id="edit" class="blk-md-text text-right">
                                    edit
                                </div>
                                <div class="blk-md-text">Type: ' . $item['type_freight'] . '</div>
                                <div class="blk-md-text">Division: ' . $item['division_title'] . ', ' . $item['division_name'] . '</div>
                                <div class="blk-md-text">State: '. $item['state_name'] .' , ' . $item['state_abbre'] . '</div>
                            </div>';
            }
    }
    } else {
        echo 'error, please login or reload page';
    }
