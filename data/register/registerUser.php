<?php
require (dirname(__FILE__).'/../dbConn.php');

if (isset($_POST['newUsername'])){
        // removes backslashes
    $username = stripslashes($_POST['newUsername']);
            //escapes special characters in a string
    $username = mysqli_real_escape_string($connect,$username); 
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($connect,$email);
    $password = stripslashes($_POST['newPassword']);
    $password = mysqli_real_escape_string($connect,$password);
    $trn_date = date("Y-m-d H:i:s");
    $query = "INSERT into railpix.users (username, password, email, trn_date)
    VALUES ('" . $username . "', '" . md5($password) . "', '" . $email . "', '" . $trn_date . "')";
            $result = mysqli_query($connect,$query);
            if($result) {
                echo "<h6 class='text-white text-center py-3 blue-bg borderRadius'>You are registered successfully!</h6>";
            }else{
                echo "<h6 class='text-white text-center py-3 black-md-bg borderRadius'>Uh oh! please check your connection</h6>";
            }
        }
?>