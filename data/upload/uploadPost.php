<?PHP
require (dirname(__FILE__).'/../dbConn.php');

$sql = "SELECT * FROM profiles WHERE username ='$user';";

$result = $connect->query($sql);
if($result->num_rows > 0) {
    while($item = $result->fetch_assoc()) {
        $userId = $item['profile_id'];
    }
} else {
    echo 'no';
}

$submit = $_POST['submit'];
$display = $_POST['display'];
$file = $_FILES['img']['name'];
$description = $_POST['details'];
$type = $_POST['types'];
$state = $_POST['states'];
$divisions = $_POST['divisions'];
$county = $_POST['county'];

// if(isset($file)){
//     echo "<img class='img-half' src='./img/". $file ."' alt=''/>";
// }

if (isset($_POST['submit'])) {
    $sqli = "INSERT INTO railpix.posts (post_id, img_str, category, division_ref, details, user_id, county, state_ref, google_ref)
            VALUES (NULL,'" . $file . "'," . $type . "," . $divisions . ",'" . $description . "'," . $userId . ", '" . $county . "', " . $state . ", 0)";
    $set = $connect->query($sqli);
    if (!$set) {
        echo '<div class="text-center w-100 py-3 my-2 white-bg borderRadius"><i class="fa fa-times px-2"></i>Error, Please try again later</div>';
    } elseif ($set) {
        echo '<div class="text-center w-100 py-3 my-2 blue-bg text-white borderRadius"><i class="fa fa-check px-2"></i>Post Uploaded!</div>';
    }
}





