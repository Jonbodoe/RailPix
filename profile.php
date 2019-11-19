<?php require './data/head.php'; ?>

<body>
    <?php
    require './assets/navbar.php';
    ?>

    <section>
        <div class="container-fluid pt-5 mt-3">
            <div class="row p-xl-4">
                <div class="col-lg-3 text-white">
                    <div class="text-white black-bg shadow-md">
                        <div class="d-flex justify-content-center pb-5">
                            <?php require './data/profileResults.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="p-md-4">
                        <div class="d-flex flex-wrap justify-content-center">
                        <div class="w-100 px-md-2 text-center">
                            <h5 class="">Personal Collection</h5>
                        </div>
                            <?php require './data/usersResults.php' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>