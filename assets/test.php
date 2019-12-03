<?PHP
require (dirname(__FILE__).'/../data/dbConn.php');

if(isset($_POST['submit'])) {
    print_r($_FILES['img']['name']);
    print_r($_POST['details']);
}

$user = $_SESSION['username'];
$submit = $_POST['submit'];
$file = $_FILES['img']['name'];
$description = $_POST['details'];

// if(isset($file)){
//     echo "<img class='img-half' src='./img/". $file ."' alt=''/>";
// }

// if (isset($submit)) {
//     $sql = "INSERT INTO railpix.posts (post_id, img_str, category, division_ref, user_id, county, state_ref, google_ref )
//     VALUES (NULL, '" . $user . "','" . $blog . "','" . $comment . "','" . $date . "')";
// }





echo '<div class="text-center w-100 py-3 white-bg borderRadius"><i class="fa fa-times px-2"></i>Error, Please try again later</div>';




