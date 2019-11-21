<?php 
    echo '
        <div id="displayForm" class="hidden">
            <div id="pageBlur"></div>
            <div id="insertPhotoContainer" class="">
            <div class="p-4 blue-bg text-white">Create Post</div>
                <div class="">
                    <div class="d-flex justify-content-center" id="imageContent">
                        <img class="img-fluid" id="image" />
                    </div>
                    <form class="p-3">
                        <div class="form-group">
                        <label for="exampleFormControlFile1">Choose Photo</label>
                        <input id="import" type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    '
?>