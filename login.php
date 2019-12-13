<?php require './data/head.php'; ?>

<body>
    <?php
    require './assets/navbar.php';
    ?>
    <section class="pt-5 mt-3">
        <div class="container-fluid p-4">
            <div class="row px-3">
                <div class="col-sm-7">
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
                            <form action="" method="post" name="login">
                                <h1 class="serif text-white py-3">Login to RailPix</h1>
                                <?php
                                    require "./data/register/registerUser.php";
                                    require "./data/register/registerProfile.php";
                                ?>
                                <div class="form-group">
                                    <label for="inputUser" class="col-form-label text-white">Username</label>
                                    <input type="text" name="username" class="form-control black-bg text-white" id="inputUser" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-form-label text-white">Password</label>
                                    <input type="password" name="password" class="form-control black-bg text-white" id="inputPassword" placeholder="Password">
                                </div>
                                <input type="hidden" name="display" value="1">
                                <div class="form-group py-3">
                                    <div class="">
                                        <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                                <p class="wht-md-text">Not registered yet? <a id="link2register" href='login.php#register'>Register Here</a></p>
                                <?php
                                require "./data/login/loginUser.php";
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="register" class="container-fluid white-bg pt-5 hidden">
            <div id="registerImg" class="row blue-bg">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 white-bg">
                    <h2 class="pt-5 mt-3 text-center font-weight-bolder">Welcome!</h2>
                    <p class="blk-md-text text-center">To get started, please fill out your account information below!</p>

                    <div class="d-flex justify-content-center w-100 h-75 pt-3">
                        <div id="register-form" class="align-self-center">
                            <h3 class="py-2">1. Create An Account</h3>
                            <form action="login.php" method="post" name="registration">
                                <div class="form-group">
                                    <label class="col-form-label">Username</label>
                                    <input type="text" name="newUsername" class="form-control white-form w-100 no-border" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input type="email" name="email" class="form-control black-bg white-form w-100 no-border" id="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" name="newPassword" class="form-control white-form w-100 no-border" placeholder="Password" required>
                                </div>
                                <div class="form-group py-3">
                                    <div id="link2selfInfo" class="">
                                        <!-- <button id="info2selfInfo" type="submit" name="submit" value="Register" class="btn btn-primary">Next</button> -->
                                        <a class="btn btn-primary" href="#register">Next</a>
                                    </div>
                                </div>
                                <!-- </form> -->
                        </div>
                        <div id="personal-form" class="align-self-center hidden">
                            <p class="blue-bg py-2 text-center text-white borderRadius">Almost done setting up your account!</p>
                            <h3 class="py-2">2. Personal Information</h3>
                            <!-- <form action="" class="p-4 d-flex justify-content-center" method="post" action="" enctype="multipart/form-data"> -->
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Choose Profile Photo</label><br>
                                <input id="upload" class="" name="img-profile" type="file" class="form-control-file" required>
                                <div class="form-group">
                                    <label class="col-form-label">Name</label>
                                    <input type="text" name="name" class="form-control white-form w-100 no-border" placeholder="Name">
                                </div>
                                <div id="displayForms" class="my-3">
                                    <label for="details">Add a Biography</label>
                                    <textarea class="form-control light-bg no-border my-2" name="details" id="details" rows="4" style="width:18rem" placeholder="Write a description" required></textarea>
                                    <!-- <button type="submit" name="submit" value="Register" class="btn btn-primary">Finish</button> -->
                                </div>
                            </div>
                            <button type="submit" name="submit" value="Register" class="btn btn-primary">Finish</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </section>
    <?php
    require './assets/footer.php';
    $connect->close();
    ?>
    <script src="./js/register.js"></script>
</body>