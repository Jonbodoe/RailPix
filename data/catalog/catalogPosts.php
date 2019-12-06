<?php
    require (dirname(__FILE__).'/../dbConn.php');



    $type = $_GET['types'];
    $state = $_GET['state'];
    $divisions = $_GET['divisions'];

    $typeCheck = isset($type) ? "types.type_id = $type ": '';
    $divisionCheck = isset($divisions) ? "AND divisions.division_id = $divisions" : '';
    $stateCheck = isset($state) ? "AND states.state_id = $state" : '';
    $whereCheck = $typeCheck || $divisionCheck || $stateCheck ? "WHERE" : '';

    $sql = "SELECT profiles.profile_id, profiles.username, profiles.profile_img, posts.*, types.*, divisions.*
            FROM profiles 
            JOIN posts ON (profiles.profile_id = posts.user_id)
            JOIN types on (posts.category = types.type_id)
            JOIN divisions on (divisions.division_id = posts.division_ref)
            " . $whereCheck ." ". $typeCheck . " " . $stateCheck . " " . $divisionCheck . "";
            // Figure out how to set up AND's added
        

    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        while ($item = $result->fetch_assoc()) {
            echo '
            <a class="post-container" href="post.php?post='. $item['post_id'] .'">
                <div class="post card m-4 d-inline-block no-border shadow-sm" style="max-width: 23rem;">
                    <div class="card-header shadow d-flex flex-row">
                        <img class="img-mini" src="./img/'. $item['profile_img'] .'" alt="photo of user"/>
                        <div class="align-self-center px-3">' . $item['username'] . '</div>
                    </div>
                    <img class="card-img-top" src="./img/' . $item['img_str'] . '" alt="Card image cap">
                    <div class="card-body blk-md-text py-3">
                        <p class="card-text">' . $item['details'] . '</p>
                    </div>
                    <div class="card-footer blk-md-text">' . $item['type_freight'] . '</div>
                </div>
            </a>
            ';
        }
    } else {
        echo "no results ):";
    }

?>