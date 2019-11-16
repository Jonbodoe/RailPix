<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RailPix</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="./style/style.css" rel="stylesheet" type="text/css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:400,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
        require './assets/navbar.php';
    ?>
    <section class="py-4">
        <div class="container-fluid mt-5">
            <div class="row">
                <div id="loginImg" class="col-sm-7 opacity">
                    <div class=" d-flex h-100">
                        <div class="p-3 mb-4 align-self-center">
                            <div class="p-md-5">
                                <img class="img-half px-3" src="./img/RailPix-blk.png" alt="logo of the RailPix website" />
                                <h1 class="serif p-3 mt-4">Explore the System</h1>
                                <p class="px-3">
                                    A plateform to share photos of the American Railroad <br>
                                    locomotives, intermodels, boxcars, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 black-bg d-flex justify-content-center">
                    <form action="index.php" class="align-self-center">
                        <h1 class="serif text-white py-3">Login to RailPix</h1>
                        <div class="form-group">
                            <label for="inputUser" class="col-form-label text-white">Username</label>
                            <input type="text" class="form-control black-bg text-white" id="inputUser" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-form-label text-white">Password</label>
                            <input type="password" class="form-control black-bg text-white" id="inputPassword" placeholder="Password">
                        </div>

                        <div class="form-group py-3">
                            <div class="">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <?php require './assets/footer.php' ?>
</body>