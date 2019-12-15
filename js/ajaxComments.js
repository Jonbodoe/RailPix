$(document).ready(function () {
    // console.log('hello')
    $("#submitComment").click(function () {
        $("#comments").load("../data/post/listComments.php");
        // Couldn't get AJAX to work.
    })
})