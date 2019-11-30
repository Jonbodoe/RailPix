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
                            <div class=" mt-4 white-bg shadow" style="max-width: 43rem">
                                <?php 
                                    require './data/profile/postDetail.php';
                                    require './data/profile/makeComments.php';
                                    // require './data/profile/ajaxComments.php';
                                ?>
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