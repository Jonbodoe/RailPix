<?php
    require (dirname(__FILE__).'./../dbConn.php');
    
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
            // removes backslashes
    $username = stripslashes($_POST['username']);
            //escapes special characters in a string
    $username = mysqli_real_escape_string($connect,$username);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($connect,$password);
    //Checking is user existing in the database or not
            $query = "SELECT * FROM `users` WHERE username='$username'
    and password='".md5($password)."'";
    $result = mysqli_query($connect,$query) or die();
    $rows = mysqli_num_rows($result);
            if($rows==1){
                $_SESSION['username'] = $username;
                        // Redirect user to index.php
                echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
                // header('Location:index.php', true,  301 );
                // exit;
            }else{
                echo "<div class='form text-white'>
                    <p>Username/password is incorrect.</p>
                </div>";
            }
        }else{
    }
    

?>