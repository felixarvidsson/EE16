window.onload = start;

function start() {
    const eBox = document.querySelector(".coordinates");

    mapboxgl.accessToken =
        'pk.eyJ1IjoiZHVtYmxlZGF6IiwiYSI6ImNqcGF5MWoxMDIwODIzcG8zNWVvYWZ3a3IifQ.Gdl3T_gIf1YyK3Wxn10ftg';
    let map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/dumbledaz/cjpb2wnbg6t6r2spak6cxmw7a', // stylesheet location
        center: [-74.50, 40], // starting position [lng, lat]
        zoom: 12 // starting zoom
    });

    map.on("click", addMarker);

    function addMarker(e) {
        let marker = new mapboxgl.Marker()
            .setLngLat(e.lngLat)
            .addTo(map);
        
        console.log(e.lngLat);

        /* Lägg till en ny rad i tabellen för varje click */
        eBox.innerHTML += e.lngLat.lng + "," + e.lngLat.lat + ",\n";
    }
}