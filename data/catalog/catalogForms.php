<?php
    require (dirname(__FILE__).'/../dbConn.php');

    // $sql = "SELECT DISTINCT posts.*, divisions.*, states.state_id, states.state_name, types.* FROM posts
    //         LEFT JOIN divisions ON (divisions.division_id = posts.division_ref)
    //         LEFT JOIN states ON (states.state_id = posts.state_ref)
    //         LEFT JOIN types ON (types.type_id = posts.category) 
    // ";

    // $result = $connect->query($sql);
    // if ($result->num_rows > 0) {
    //     while ($item = $result->fetch_assoc()) {
    //         stateProps($item['state_name'], $item['state_ref']);
    //     }

    // } 
    // else {
    //     echo 'error, please login or reload page';
    // }

    // function stateProps($stateName, $stateRef) {
    //     echo $stateName;
    //     echo "<br/>";
    //     echo $stateRef;
    //     echo "<br/>";
    // }

    echo '
        <form>
            <label class="wht-md-text" for="type">Type</label><br>
            <select id="type" class="custom-select wht-md-text">

                <option selected>All</option>
                <option value="1">Locomotives</option>
                <option value="2">Boxcars</option>
                <option value="3">Grainers</option>
                <option value="4">Tankers</option>
                <option value="5">Intermodels</option>

            </select>
        </form>
    ';
?>