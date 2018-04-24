<!DOCTYPE html>
<html>

<head>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="map"></div>
    <script>
        function initMap() {
            var uluru = {
                lat: 53.376966,
                lng: -1.467767
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2YPFQl-XBqzXy6KJBPPz1DN4_gka9ii0&callback=initMap">
    </script>
</body>

</html>