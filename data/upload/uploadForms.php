<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $listTables = ['type_freight'=>'type','division_title'=>'division','state_name'=>'state'];

    foreach ($listTables as $table => $value) {
        $values = "".$value."s";
        echo '
                <label class="blk-md-text py-1" for="' . $values . '">'. ucfirst($values) .'</label><br>
                <select name="' . $values . '" id="' . $values . '" class="custom-select upload-form lgt-select blk-md-text no-border" style="width:18rem" required>
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
        echo '</select><br>';
    }

?>