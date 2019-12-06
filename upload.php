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
                            <div class="px-md-2">
                                <h5 class="text-center">Upload</h5>
                                <?php require './data/upload/uploadPost.php' ?>
                                <div id="uploadContainer" class="white-bg borderRadius my-3 text-left shadow-sm">
                                    <h5 class="py-3 text-center font-bold blue-bg text-white borderRadius">Create Post</h5>
                                    <div class="d-flex justify-content-center" id="imageContent">
                                        <img class="img-fluid" id="img" />
                                    </div>
                                    <form action="" class="p-4 d-flex justify-content-center" method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Choose Photo</label><br>
                                            <input id="upload" class="" name="img" type="file" class="form-control-file" required>
                                            <div id="displayForms" class="my-3 hidden">
                                                    <label for="details">Add a Description</label>
                                                    <textarea class="form-control light-bg no-border my-2" name="details" id="details" rows="4" style="width:18rem" placeholder="Write a description" required></textarea>
                                                    <label for="details">County</label>
                                                    <input class="form-control light-bg no-border type="text" name="county" placeholder="County" style="width:18rem">
                                                    <input type="hidden" name="posted" value="1">
                                                    <?php require './data/upload/uploadForms.php' ?>

                                                    <button id="submitComment" name="submit" type="submit" class="btn btn-primary my-4">Submit</button>
                                            </div>
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