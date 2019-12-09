<?php require './data/head.php';?>

<body>
    <?php
        require './assets/navbar.php';
    ?>
    <header id="header" class="container-fluid pt-5 mt-3">
        <div class="row p-4">
            <div class="col-lg-2">
                <div class="blue-bg d-flex justify-content-center h-100 text-white">
                        <?php require './data/dashboard/dashboarduser.php'?>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="d-flex" id="dashboardImg">
                    <div class="align-self-end p-4 text-white">
                        <h1 class="font-weight-bolder">Dashboard</h1>
                        <h4 class="py-2"> <?php echo date("F jS"); ?></h4>
                    </div>
                </div>
                <!-- <img class="img-fluid" src="./img/csxintermodel.jpg" alt="photo of csx intermodel"/> -->
            </div>
            <div class="col-lg-3">
                <a href="upload.php">
                <div class="black-bg d-flex justify-content-center h-100">
                    <div class="align-self-center text-white">
                        <h4>Upload<i class="fa fa-file-image-o px-2"></i></h4>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </header>
    <section class="py-4">
        <div class="container-fluid py-3 shadow-sm white-bg">
            <div class="row d-flex justify-content-center">
                <div class="text-center py-4">
                    <h3 class="serif">Recent Photos</h3>
                </div>
            </div>
            <div class="text-white d-flex justify-content-center mb-4">
                <?php
                ?>
            </div>
        </div>
    </section>
    <?php
        require './assets/footer.php';
    ?>

</body>

</html>