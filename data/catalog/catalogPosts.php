<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $type = $_GET['types'];
    $state = $_GET['state'];
    $divisions = $_GET['divisions'];
    $search = $_GET['search'];
    $find= mysqli_real_escape_string($connect, $search);


    $typeCheck = isset($type) ? "types.type_id = $type": '';
    $and1 = isset($type) ? "AND" : '';
    $divisionCheck = isset($divisions) ? "divisions.division_id = $divisions" : '';
    $searchCheck = isset($search) ? "posts.details or types.type_freight LIKE '%$find%'" : '';
    // $stateCheck = isset($state) ? "states.state_id = $state" : '';
    $and2 = isset($type) && isset($divisions) ? "AND" : '';
    $whereCheck = $typeCheck || $divisionCheck || $searchCheck ? "WHERE" : '';

    $sql = "SELECT profiles.profile_id, profiles.username, profiles.profile_img, posts.*, types.*, divisions.*
            FROM profiles 
            JOIN posts ON (profiles.profile_id = posts.user_id)
            JOIN types on (posts.category = types.type_id)
            JOIN divisions on (divisions.division_id = posts.division_ref)
            " . $whereCheck ." ". $typeCheck . "  " . $and1 . " " . $divisionCheck . " " . $and2 . " " . $searchCheck . " ";

    if (isset($_GET['display']) || isset($_GET['search'])) {    
        echo '<div class="text-center w-100 py-2 my-1 borderRadius">              
                Keywords: '. $search. '   |   
                Category: ' . $type . '   |   
                Division:  ' . $divisions . 
            '</div>';
    }

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
        echo '<div class="text-center w-100 py-3 my-2 white-bg borderRadius">No results found</div>';
        echo '<div class=" w-100 p-3 my-1 borderRadius">
                <div class="d-flex justify-content-center">    
                    Not finding any results? Try searching for category one at a time! However, there are some categories that interlap 
                </div>       
            </div>';
    }



?>