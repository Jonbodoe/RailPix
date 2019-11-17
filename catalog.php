<?php require './data/head.php';?>

<body>
    <?php
    require './assets/navbar.php';
    ?>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div id="category" class="col-md-3 black-bg fixed text-white">
                    <div id="editor" class="mt-5 text-white black-bg">
                        <div class="p-md-3">
                            <div class="py-4">
                                <img class="img-quarter" src="img/RailPix.png" alt="photo of the logo railpix" />
                            </div>
                            <div class="black-line"></div>
                            <h5 class="py-3 font-weight-bold">Categories</h5>
                            <form>
                                <label class="wht-md-text" for="type">Type</label><br>
                                <select id="type" class="custom-select wht-md-text">

                                    <option selected>All</option>
                                    <option value="1">Locomotives</option>
                                    <option value="2">Boxcars</option>
                                    <option value="3">Grainers</option>
                                    <option value="4">Tankers</option>
                                    <option value="5">Intermodels</option>

                                </select>
                            </form>
                            
                        </div>
                    </div>
                </div>
                <div id="results" class="col-md-9">
                    <div id="sub-bar" class="blue-bg">
                        <?php require "assets/detailsection.php"

                        ?>
                    </div>
                </div>
    </section>

</body>

</html>