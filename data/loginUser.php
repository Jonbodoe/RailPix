<?php
    require 'dbConn.php';

    if (isset($_POST['display'])) {
        $_SESSION['username'] = $_POST['inputUser'];
        echo "<div class='text-white'>" . $_SESSION['username'] ."</div>";
    }
?>