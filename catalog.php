<?php require './data/head.php'; ?>

<body>
    <?php
    require './assets/navbar.php';
    ?>
    <section>
        <div class="container-fluid">
            <div class="row p-xl-4">
                <div id="category" class="col-md-3 no-padding w-100">
                    <div id="editor" class="mt-5 text-white black-bg fixed">
                        <div class="d-flex justify-content-center">
                            <div class="py-2">
                                <img class="img-pfl-md py-2" src="./img/RailPix.png" />
                            </div>
                        </div>
                        <div class="px-4">
                            <div class="black-line"></div>
                            <h5 class=" py-2 font-weight-bold">Catalog</h5>
                            <!-- <div class="font-weight-bold">Filter</div> -->
                            <?php require './data/catalog/catalogForms.php' ?>
                            <!-- <form>
                                <label class="wht-md-text" for="type">Type</label><br>
                                <select id="type" class="custom-select wht-md-text">

                                    <option selected>All</option>
                                    <option value="1">Locomotives</option>
                                    <option value="2">Boxcars</option>
                                    <option value="3">Grainers</option>
                                    <option value="4">Tankers</option>
                                    <option value="5">Intermodels</option>

                                </select>
                            </form> -->

                        </div>
                    </div>
                </div>
                <div id="results" class="col-md-9">
                    <div class="p-md-4 category-list">
                        <div class="d-flex flex-wrap justify-content-center">
                            <div class="w-100 px-md-2 text-center">
                                <h5 class="">Collections</h5>
                                <?php require './data/catalog/catalogPosts.php';?>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
    </section>

</body>
    <script src="./js/filterResults.js"></script>

</html>