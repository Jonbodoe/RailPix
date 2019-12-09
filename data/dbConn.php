
<?php 
$hostname = 'localhost';
$dbname = 'railpix';
$username = 'root';
$pw = 'root';
$port = 8889;

$connect = new mysqli($hostname, $username, $pw, $dbname, $port); 

if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
} else {
}

?>