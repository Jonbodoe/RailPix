<?php
    // echo 'hello';

    $post = $_GET['post'];


    $sql = "SELECT posts.post_id, posts.google_ref, google.google_id, google.latitude, google.longitude 
            FROM posts JOIN google ON (posts.google_ref = google.google_id)
            WHERE $post = google.post_ref
            ";

$result = $connect->query($sql);
if ($result->num_rows > 0) {
    while ($item = $result->fetch_assoc()) {
        // print_r($item);
        echo '
        <div class="font-weight-bold">Google Maps</div>
        <div class="my-3" id="map-canvas"></div>
        <script>
        function initialize() {
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
            var styledMap = new google.maps.StyledMapType(styles, {
                name: "Styled Map"
            });

            var mapOptions = {
                zoom: 13,
                center: new google.maps.LatLng(' . $item['latitude'] . ',' . $item['longitude'] . '),
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.TERRAIN, "map_style"]
                }
            };

            var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
            var marker = new google.maps.Marker({position: mapOptions.center, map: map});


            // Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set("map_style", styledMap);
            map.setMapTypeId("map_style");
            }

            initialize();
        </script>';
    }
} else {
    
}
?>