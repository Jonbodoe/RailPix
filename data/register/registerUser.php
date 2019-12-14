<?php
require (dirname(__FILE__).'/../dbConn.php');


$username = stripslashes($_POST['newUsername']);
//escapes special characters in a string
$username = mysqli_real_escape_string($connect,$username); 
$email = stripslashes($_POST['email']);
$email = mysqli_real_escape_string($connect,$email);
$password = stripslashes($_POST['newPassword']);
$password = mysqli_real_escape_string($connect,$password);
$trn_date = date("Y-m-d H:i:s");

$bio = $_POST['details'];
$bio = mysqli_real_escape_string($connect,$bio); 
$name = $_POST['name'];
$name = mysqli_real_escape_string($connect,$name); 
$img = $_POST['img-profile'];


if (isset($_POST['newUsername'])){
        // removes backslashes
    $query = "INSERT into railpix.users (username, password, email, trn_date)
    VALUES ('" . $username . "', '" . md5($password) . "', '" . $email . "', '" . $trn_date . "')";
            $result = mysqli_query($connect,$query);
            // if($result) {
            //     echo "<p class='text-white text-center py-3 blue-bg borderRadius'>You are registered successfully!</p>";
            // }else{
            //     echo "<p class='text-white text-center py-3 black-md-bg borderRadius'>Uh oh! please check your connection</p>";
            // }
    $sql = "INSERT into railpix.profiles (username, bio, profile_img, user_ref, last_login, name) VALUES 
            ('". $username ."', '" . $bio . "', '". $img ."', 0, '" . $trn_date . "', '" . $name . "')";
            $results = mysqli_query($connect,$sql);
            if($results && $result) {
                echo "<p class='text-white text-center py-3 blue-bg borderRadius'>You are registered successfully!</p>";
            }else{
                echo "<p class='text-white text-center py-3 black-md-bg borderRadius'>Uh oh! please try again</p>";
            }
    }
?>