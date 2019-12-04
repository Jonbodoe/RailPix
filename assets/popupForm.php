<div id="displayForm" class="hidden">
    <div id="pageBlur"></div>
    <div id="insertPhotoContainer" class="">
        <div class="p-4 blue-bg text-white">Create Post</div>
        <div class="d-flex justify-content-center" id="imageContent">
            <img class="img-fluid" id="image" />
        </div>
        <form class="p-3" method="post" action="./assets/test.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlFile1">Choose Photo</label>
                <input id="import" name="img" type="file" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="details">Add a Description</label>
                <textarea class="form-control w-75 light-bg" name="details" id="details" rows="3"></textarea>
                <input type="hidden" name="display" value="1">
                <button id="submitComment" type="submit" name="submit" class="btn btn-primary my-3">Submit</button>
            </div>
        </form>

    </div>
</div>
<?php
?>