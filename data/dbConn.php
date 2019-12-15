
<?php 
$hostname = 'localhost';
$dbname = 'railpix';
$username = 'root';
$pw = 'root';
$port = 8889;

// $hostname = 'localhost';
// $dbname = 'jonathan_railpix';
// $username = 'jonathan_le';
// $pw = 'Skyline1997';

// If connecting to cpanel, use this instead if locally, use the first one.

$connect = new mysqli($hostname, $username, $pw, $dbname, $port); 

// remove $port if connecting to cpanel

if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
} else {
}

?>