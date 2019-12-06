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

$submit = $_POST['posted'];
$display = $_POST['display'];
$file = $_FILES['img']['name'];
$description = $_POST['details'];
$type = $_POST['types'];
$state = $_POST['states'];
$divisions = $_POST['divisions'];
$county = $_POST['county'];


if (isset($_POST['posted'])) {
    $sqli = $connect->prepare("INSERT INTO railpix.posts (post_id, img_str, category, division_ref, details, user_id, county, state_ref, google_ref)
            VALUES (NULL,'" . $file . "'," . $type . "," . $divisions . ", ? ," . $userId . ", '" . $county . "', " . $state . ", 0)");
    $sqli->bind_param('s', $description);
    $sqli->execute();

    if (!$sqli) {
        echo '<div class="text-center w-100 py-3 my-2 white-bg borderRadius"><i class="fa fa-times px-2"></i>Error, Please try again later</div>';
    } elseif ($sqli) {
        echo '<div class="text-center w-100 py-3 my-2 blue-bg text-white borderRadius"><i class="fa fa-check px-2"></i>Post Uploaded!</div>';
    }
}





