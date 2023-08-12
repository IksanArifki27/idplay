<html>
  <head>
    <title>IDPlay</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
   <style>
    #map {height:300px;}
   </style>
  </head>
  <body>
    <div id="map"></div> 
    

  </body>
 <script>

	var map = L.map('map').setView([-7.983908, 112.621391], 13);

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 20,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);


    var popup = L.popup()
        .setLatLng([-7.983908, 112.621391])
        .setContent('Ketik Untuk Melihat')
        .openOn(map);

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent('Alamat anda :  ' + e.latlng.lat.toString()+" & "+e.latlng.lng.toString())
            .openOn(map);
                // data latitude = e.latlng.lat.toString()
                // data longitude = e.latlng.lng.toString()
    }


    map.on('click', onMapClick);
 </script>
</html>