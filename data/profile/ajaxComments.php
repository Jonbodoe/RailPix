<?php
require (dirname(__FILE__).'/../dbConn.php');

$post = $_GET["post"];
$edit = $_GET["edit"];
$user = $_SESSION['username'];

$sql = "SELECT profiles.profile_id, profiles.username, profiles.profile_img, posts.*, comments.*
    FROM profiles 
    JOIN posts on (posts.post_id = $post)
    JOIN comments on (comments.post_ref = $post)
    WHERE comments.user_ref = profiles.profile_id
";

$result = $connect->query($sql);
if ($result->num_rows > 0) {
    while ($item = $result->fetch_assoc()) {
        if (!$imageContent) {
        echo '
            <div>
                <img class="img-fluid" src="./img/' . $item["img_str"] . '" alt="' . $item["details"] . '"/>
                <div class="d-flex blk-md-text">
                    <div class="p-4" style="max-width:10rem">
                        <img class="circle img-md-mini" src="./img/' . $item['profile_img'] . '" alt="photo of user"/>
                    </div>
                    <div class="p-4 text-left w-100 light-bg">
                        <div class="py-2">
                            <div class="font-weight-bold">
                                ' . $item["username"] . '
                            </div>
                            <div>' . $item['details'] . '</div>
                            <div id="edit" class="blk-md-text text-right">
                                edit
                            </div>
                        </div>
                        <div class="font-weight-bold">
                            Comments
                        </div>
                        <div id="loadComments">
                        <div class="py-1 d-flex justify-content-between">
                            <div class="text-left">
                                <div class="pr-3 text-black">' . $item["username"] . '</div>
                                <div class="pr-3">' . $item["comment_message"] . '</div>  
                            </div>     
                            <div class="text-right">
                                <a href="commentEdit.php?post=' . $post . '&edit=' . $item["comment_id"] . '"><i class="fa fa-pencil"></i></a><br/>
                            </div>     
                        </div> 

            ';
            $imageContent = true;
        } elseif ($user == $item['username']) {
        echo '
            <div class="py-1 d-flex justify-content-between">
                <div class="text-left">
                    <div class="pr-3 text-black">' . $item["username"] . '</div>
                    <div class="pr-3">' . $item["comment_message"] . '</div>  
                </div>     
                <div class="text-right">
                    <a href="commentEdit.php?post=' . $post . '&edit=' . $item["comment_id"] . '"><i class="fa fa-pencil"></i></a><br/>
                </div>     
            </div> 
        '; 
        } else {
        echo '
            <div class="py-1 d-flex justify-content-between">
                <div class="text-left">
                    <div class="pr-3 text-black">' . $item["username"] . '</div>
                    <div class="pr-3">' . $item["comment_message"] . '</div>  
                </div>        
            </div> 
        ';
        }
        

}

} else {
    echo 'error, please login or reload page';
}
echo '
    <form action="" method="post" class="py-3">
        <div class="form-group">
            <label for="comment">Add a comment</label>
            <textarea class="form-control w-75" name="comment" id="comment" rows="3"></textarea>
        </div>
        <input type="hidden" name="display" value="1">
    </form>
    <button id="submitComment" type="submit" class="btn btn-primary">Submit</button>
    </div></div></div></div>
';
