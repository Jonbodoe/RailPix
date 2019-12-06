<?php require './data/head.php'; ?>

<body>
    <?php
    require './assets/navbar.php';
    ?>
    <section>
        <div class="container-fluid pt-5 mt-3">
            <div class="row p-xl-4 ">
                <div class="col-lg-3 text-white d-flex justify-content-center">
                    <div class="text-white black-bg shadow-md h-100" style="max-width: 23rem">
                        <div class="d-flex justify-content-center pb-5">
                            <?php require './data/profile/profilePost.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 p-md-4">
                    <div class="w-100 px-md-2 text-center d-flex justify-content-center">
                        <div class="">
                            <h5 class="">Post Details</h5>
                            <?php require './data/upload/uploadPost.php'?>
                            <div class=" mt-4 white-bg shadow" style="max-width: 43rem">
                                <?php 
                                    require './data/post/postDetail.php';
                                    require './data/post/listComments.php';
                                    require './data/post/makeComments.php';
                                    // require './data/profile/ajaxComments.php';
                                ?>
                                <!-- half of postdetails static info  -->
                                        <form action="" method="post" class="py-3">
                                            <div class="form-group">
                                                <label for="comment">Add a comment</label>
                                                <textarea class="form-control w-75" name="comment" id="comment" rows="3"></textarea>
                                            </div>
                                            <input type="hidden" name="display" value="1">
                                            <button id="submitComment" type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- postdetails static info -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    require './assets/footer.php';
    ?>
    <script  type="text/javascript" src="./js/postEvents.js"></script>
    <script  src="./js/submitComment.js"></script>
</body>