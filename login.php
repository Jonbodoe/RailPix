<?php require './data/head.php'; ?>

<body>
    <?php
    require './assets/navbar.php';
    ?>
    <section class="pt-5 mt-3">
        <div class="container-fluid p-4">
            <div class="row px-3">
                <div class="col-sm-7 opacity">
                    <div id="loginImg" class=" d-flex w-100">
                        <div class="p-3 mb-4 align-self-center">
                            <div class="p-md-5">
                                <img class="img-half py-3" src="./img/RailPix-blk.png" alt="logo of the RailPix website" />
                                <h1 class="serif p-3 mt-4">Explore the System</h1>
                                <p class="px-3">
                                    A plateform to share photos of the American Railroad <br>
                                    locomotives, intermodels, boxcars, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="d-flex justify-content-center black-bg w-100 h-100">
                        <div class="align-self-center">
                            <form action="" method="post">
                                <h1 class="serif text-white py-3">Login to RailPix</h1>
                                <div class="form-group">
                                    <label for="inputUser" class="col-form-label text-white">Username</label>
                                    <input type="text" name="inputUser" class="form-control black-bg text-white" id="inputUser" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-form-label text-white">Password</label>
                                    <input type="password" name="inputPass" class="form-control black-bg text-white" id="inputPassword" placeholder="Password">
                                </div>
                                <input type="hidden" name="display" value="1">
                                <div class="form-group py-3">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                                <?php require "./data/loginUser.php"; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require './assets/footer.php' ?>
</body>