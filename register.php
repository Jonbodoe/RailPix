<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require './data/dbConn.php';

if (isset($_POST['username'])){
        // removes backslashes
    $username = stripslashes($_POST['username']);
            //escapes special characters in a string
    $username = mysqli_real_escape_string($connect,$username); 
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($connect,$email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($connect,$password);
    $trn_date = date("Y-m-d H:i:s");
    $query = "INSERT into railpix.users (username, password, email, trn_date)
    VALUES ('" . $username . "', '" . md5($password) . "', '" . $email . "', '" . $trn_date . "')";
            $result = mysqli_query($connect,$query);
            if($result) {
                echo "<div class='form'>
                <h3>You are registered successfully.</h3>
                <br/>Click here to <a href='login.php'>Login</a></div>";
            }else{
                echo 'didnt work';
            }
        }
?>

<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
</body>
</html>