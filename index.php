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
    <?php require './assets/navbar.php'; ?>
    <header id="header" class="container-fluid">
        <div class="row p-4">
            <div class="col-sm-4 text-white">
                <div class="black-bg d-flex h-100">
                    <div class="p-3 align-self-end">
                        <div class="p-md-5">
                            <img class="img-half mb-3 p-3" src="./img/RailPix.png" alt="logo of the RailPix" />
                            <div class="black-line"></div>
                            <h1 class="serif p-3 mt-4">Benching the Railroad.</h1>
                            <p class="px-3 wht-md-text">
                                Documenting Class I divisions and its history through the people.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <img class="img-fluid" src="./img/header.jpg" alt="photo og a boxcar of Ontario Northland" />
            </div>
        </div>
    </header>
    <section class="py-4">
        <div class="container-fluid py-3 shadow-md white-bg">
            <div class="row d-flex justify-content-center">
                <div class="text-center blk-md-text py-4">
                    <h2 class="serif">Photo Gallery</h2>
                    <p>Search and find active and inactive locomotives, boxcars, <br>reefers, grainers, and railroad infrustructure. </p>
                    <form class="py-3" action="#">
                        <button id="explore" type="submit" class="btn red-bg text-white">Explore</button>
                    </form>
                </div>
            </div>
            <div class="text-white d-flex justify-content-between px-3 mb-4">


                <div class="card mb-3 d-inline-block" style="max-width: 20rem;">
                    <div class="card-header py-3 blue-bg shadow">Header</div>
                    <img class="card-img-top" src="./img/ontarioNL.jpg" alt="Card image cap">
                    <div class="card-body blk-md-text">
                        <h4 class="card-title">Primary card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card mb-3 d-inline-block" style="max-width: 20rem;">
                    <div class="card-header py-3 blue-bg">Header</div>
                    <img class="card-img-top" src="./img/ontarioNL.jpg" alt="Card image cap">
                    <div class="card-body blk-md-text">
                        <h4 class="card-title">Primary card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card mb-3 d-inline-block" style="max-width: 20rem;">
                    <div class="card-header py-3 blue-bg">Header</div>
                    <img class="card-img-top" src="./img/ontarioNL.jpg" alt="Card image cap">
                    <div class="card-body blk-md-text">
                        <h4 class="card-title">Primary card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card mb-3 d-inline-block" style="max-width: 20rem;">
                    <div class="card-header py-3 blue-bg">Header</div>
                    <img class="card-img-top" src="./img/ontarioNL.jpg" alt="Card image cap">
                    <div class="card-body blk-md-text">
                        <h4 class="card-title">Primary card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid py-5">
        <div class="row shadow-md">
            <div class="col-sm-5 blue-bg">
                <div class=" d-flex h-100">
                    <div class="p-3 mb-4 align-self-end">
                        <div class="p-md-5 text-white">
                            <h1 class="serif p-3 mt-4">Our Community</h1>
                            <p class="px-3 wht-md-text">
                                Help us contribute and document America's railroad history! We accept all photos that follow our guidlines of
                                benching trains and and its components. Upload photos today of your most recent benches or from the past!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="people" class="col-sm-7"></div>
        </div>
    </section>
    <section class="container-fluid py-5">
        <div class="row p-4">
            <div class="col-sm-8">
                <img class="img-fluid" src="./img/rider.jpg" alt="photo of a person riding a intermodel train" />
            </div>
            <div class="col-sm-4">
                <div class=" d-flex black-bg h-100">
                    <div class="p-3 mb-4 align-self-center">
                        <div class="p-md-5 text-white">
                            <h1 class="serif p-3 mt-4">About</h1>
                            <p class="px-3 wht-md-text">
                                To build a project that uses PHP as a backend language for to perform database management. 
                                Which includes using Javascript for interactivity and CSS stylings.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require'./assets/footer.php'?>
</body>

</html>