<?php
    require (dirname(__FILE__).'/../dbConn.php');

    $listTables = ['type_freight'=>'types','division_title'=>'divisions','state_name'=>'states'];
    echo '<form class="">';

    foreach ($listTables as $table => $value) {
        echo '
                <label class="wht-md-text py-1" for="' . $value . '">'. ucfirst($value) .'</label><br>
                <select name="' . $value . '" id="' . $value . '" class="custom-select wht-md-text">
                <option disabled selected>Select</option>
            ';
        $sql = "SELECT * FROM " . $value . "";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
        while ($item = $result->fetch_assoc()) {
           $i++;
           echo '<option value="'. $i .'">' . $item[$table] . '</option>';
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