<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $listTables = ['type_freight'=>'type','division_title'=>'division','state_name'=>'state'];
    echo '<form class="">';

    foreach ($listTables as $table => $value) {
        $values = "".$value."s";
        echo '
                <label class="wht-md-text py-1" for="' . $values . '">'. ucfirst($values) .'</label><br>
                <select name="' . $values . '" id="' . $values . '" class="custom-select wht-md-text">
                <option disabled selected>Select</option>
            ';
        $sql = "SELECT * FROM " . $values . "";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
        while ($item = $result->fetch_assoc()) {;
            $id = "".$value."_id";
            echo '<option value="'. $item["$id"] .'">' . $item[$table] . '</option>'; 
        }
        } 
        else {
        echo 'error, please login or reload page';
        }
        echo '</select><br><br>';
    }
    echo '
            <button id="submitComment" type="submit" class="btn btn-primary">Submit
            </button>
        </form>';

?>