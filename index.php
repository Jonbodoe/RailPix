<?php require './data/head.php';?>

<body>
    <?php
        require './assets/navbar.php';
    ?>
    <header id="header" class="container-fluid pt-5 mt-3">
        <div class="row p-4">
            <div class="col-lg-4 text-white">
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
            <div class="col-lg-8">
                <div id="headerImg"></div>
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
            <div class="text-white d-flex justify-content-center mb-4">
                <?php
                    require './data/home/homecards.php'
                ?>
            </div>
        </div>
    </section>
    <section id="about" class="container-fluid py-5">
        <div class="row shadow-md">
            <div class="col-sm-5 blue-bg">
                <div class="d-flex h-100">
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
                    <div class="p-3 mb-4 align-self-end">
                        <div class="p-md-5 text-white">
                            <h1 class="serif p-3 mt-4">Purpose</h1>
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
    <?php
        require './assets/footer.php';
    ?>

</body>

</html>