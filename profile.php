<?php require './data/head.php'; ?>

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
                            <div class="w-100 px-md-2 text-center">
                                <h5 class="">Personal Collection</h5>
                            </div>
                            <?php 
                                require './data/profile/usersResults.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require './assets/footer.php' ?>
</body>

</html>