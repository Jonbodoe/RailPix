<?php
    require 'dbConn.php';

    if (isset($_POST['display'])) {
        $_SESSION['username'] = $_POST['inputUser'];
        echo "<div class='text-white'>" . $_SESSION['username'] ."</div>";
    }

    // ISSUE CANNOT KEEP GET VARIABLE FROM LOGIN TO STAY IN EACH PAGE AFTER INITIAL LOGIN.
?>