$(document).ready(function() {
   $("#submitComment").click(function() {
       console.log('hello')
       $("#loadComments").load("data/profile/ajaxComments.php");
   })
});