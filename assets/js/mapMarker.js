<!-- マーカーをオリジナル画像にするためのスクリプト -->

if (window.matchMedia("(max-width: 767px)").matches) {
    //スマホ処理
    function initMap() {
        var mapPosition = {
            lat: 35.64828,
            lng: 140.03468
        };
        var mapArea = document.getElementById("maps");
        var mapOptions = {
            center: mapPosition,
            zoom: 14,
        };
        var map = new google.maps.Map(mapArea, mapOptions);

        var markerOptions = {
            map: map,
            position: mapPosition,

            icon: new google.maps.MarkerImage(
                // "/assets/images/common/map_icon_sp.png",
                "/wp-content/themes/FUJI_gulp/assets/images/common/map_icon_sp.png",
                new google.maps.Size(100, 66),
                new google.maps.Point(0, 0),
                new google.maps.Point(50, 50)
            ),
        };
        var marker = new google.maps.Marker(markerOptions);
    }
} else if (window.matchMedia("(min-width:769px)").matches) {
    //PC処理
    function initMap() {
        var mapPosition = {
            lat: 35.64828,
            lng: 140.03468
        };
        var mapArea = document.getElementById("maps");
        var mapOptions = {
            center: mapPosition,
            zoom: 16,
        };
        var map = new google.maps.Map(mapArea, mapOptions);

        var markerOptions = {
            map: map,
            position: mapPosition,

            icon: new google.maps.MarkerImage(
                "/wp-content/themes/FUJI_gulp/assets/images/common/map_icon_pc.png",
                // "/assets/images/common/map_icon_pc.png",
                new google.maps.Size(162, 107),
                new google.maps.Point(0, 0),
                new google.maps.Point(80, 50)
            ),
        };
        var marker = new google.maps.Marker(markerOptions);
    }
}
