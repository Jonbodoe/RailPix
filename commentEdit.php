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
                            <?php require './data/profile/profileInfo.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 p-md-4">
                    <div class="w-100 px-md-2 text-center d-flex justify-content-center">
                        <div class="">
                            <h5 class="">Post's Comment</h5>
                            <div class="row mt-4 white-bg shadow" style="max-width: 48rem">
                                <div class="d-flex flex-md-row flex-md-nowrap">
                                    <div class="py-3 mt-3" style="min-width:10rem">
                                    </div>
                                    <div class="light-bg" style="min-width:30rem">
                                        <div class="text-left p-3 blk-md-text">
                                            <div id="msgBlock" class="text-black font-weight-bolder">Edit Comment</div>
                                            <div id="makeComment" class="">
                                                <div class="px-3">
                                                </div>
                                                <form action="" method="post" class="py-3">
                                                    <div class="form-group">
                                                        <label for="comment">Comment</label>
                                                        <textarea class="form-control w-75" name="comment" id="comment" rows="3"></textarea>
                                                    </div>
                                                    <input type="hidden" name="display" value="1">
                                                    <div class="row d-flex justify-content-between px-3">
                                                        <button type="submit" name="change" class="btn btn-primary">Change</button>
                                                        <button type="submit" name="delete" class="btn white-bg">Delete</button>
                                                    </div>
                                                </form>
                                                <?php require './data/profile/commentEditor.php' ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <script src="./js/postEvents.js"></script>