<?php 
    require './data/head.php'; 
    require './googleapi.php';

?>


<body>
    <?php
    require './assets/navbar.php';
    ?>
    <header id="header" class="container-fluid pt-5 mt-3">
        <div class="row p-4">
            <div class="col-lg-2">
                <div class="blue-bg d-flex justify-content-center h-100 text-white">
                    <?php require './data/dashboard/dashboarduser.php' ?>
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
            <div class="row d-flex justify-content-center h-100">
                <div class="col-md-5">
                    <div class="p-4">
                    <h3 class="serif">Find spots</h3>
                    </div>
                </div>
                <div class="col-md-7 h-100 py-4">
                    <div class="h-100 self-align-center">
                    <div id="map-canvas"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function initialize() {

// Create an array of styles.
var styles = [{
    "stylers": [{
        "saturation": -100
    }]
}, {
    "featureType": "transit.line",
        "stylers": [{
        "saturation": 100
    }, {
        "color": "#007bff"
    }]
}];

// Create a new StyledMapType object, passing it the array of styles, as well as the name to be displayed on the map type control.
var styledMap = new google.maps.StyledMapType(styles, {
    name: "Styled Map"
});

// Create a map object, and include the MapTypeId to add to the map type control.
var mapOptions = {
    zoom: 13,
    center: new google.maps.LatLng(39.9297895,-75.2097039),
    mapTypeControlOptions: {
        mapTypeIds: [google.maps.MapTypeId.TERRAIN, 'map_style']
    }
};

var map = new google.maps.Map(document.getElementById('map-canvas'),
mapOptions);

// Associate the styled map with the MapTypeId and set it to display.
map.mapTypes.set('map_style', styledMap);
map.setMapTypeId('map_style');
}

initialize();
        // var styles = [{
        //     "stylers": [{
        //         "saturation": -100
        //     }]
        // }, {
        //     "featureType": "transit.line",
        //     "stylers": [{
        //         "saturation": 100
        //     }, {
        //         "color": "#ff3183"
        //     }]
        // }];

        // var styledMap = new google.maps.StyledMapType(styles, {
        //     name: "Styled Map"
        // },initMap());

        // var map;

        // function initMap() {
        //     map = new google.maps.Map(document.getElementById('map'), {
        //         center: {
        //             lat: 40.0272537,
        //             lng: -75.1628039,
        //         },
        //         zoom: 13,
        //         mapTypeControlOptions: {
        //             mapTypeIds: [google.maps.MapTypeId.TERRAIN, 'map_style']
        //         }
        //     });
        //     map.mapTypes.set('map_style', styledMap);
        // }
        // initMap();
    </script>
    <?php
    require './assets/footer.php';
    ?>

</body>

</html>