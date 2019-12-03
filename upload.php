<?php
require './data/head.php';
?>

<body>
    <?php
    require './assets/navbar.php';
    require './assets/popupForm.php';
    ?>

    <section id="profile">
        <div class="container-fluid pt-5">
            <div class="row p-xl-4">
                <div class="col-lg-3 text-white d-flex justify-content-center" style="max-width: 330px">
                    <div class="text-white black-bg shadow-md h-100">
                        <div class="d-flex justify-content-center pb-5">
                            <?php require './data/profile/profileInfo.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="p-md-4">
                        <div class="d-flex flex-wrap justify-content-center">
                            <div id="uploadContainer" class="px-md-2">
                                <h5 class="text-center">Upload</h5>
                                <?php require './assets/test.php'; ?>
                                <div class="white-bg borderRadius my-2 text-left shadow-sm ">
                                    <h5 class="py-3 text-center font-bold blue-bg text-white">Create Post</h5>
                                    <div class="d-flex justify-content-center" id="imageContent">
                                        <img class="img-fluid" id="img" />
                                    </div>
                                    <form class="p-4 d-flex justify-content-center" method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Choose Photo</label><br>
                                            <input id="upload" class="" name="img" type="file" class="form-control-file">
                                            <!-- <button id="submitComment" type="submit" name="submit" class="btn btn-primary">Submit</button> -->
                                        </div>
                                        <div class="form-group">
                                            <div id="displayForms" class="">
                                                <!-- <div class="px-3"> -->
                                                    <label for="details">Add a Description</label>
                                                    <textarea class="form-control light-bg no-border" name="details" id="details" rows="4" style="width:18rem"></textarea>
                                                <!-- </div>
                                                <div class="px-3"> -->
                                                    <input type="hidden" name="display" value="1">
                                                    <?php require './data/upload/uploadForms.php' ?>
                                                <!-- </div> -->
                                            </div>
                                            <form class="my-3">
                                                <button id="submitComment" type="submit" class="btn btn-primary my-4">Submit</button>
                                            </form>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require './assets/footer.php' ?>
    <script type="module" src="./js/popup.js"></script>
    <script type="module" src="./js/fileUpload.js"></script>
</body>

</html>