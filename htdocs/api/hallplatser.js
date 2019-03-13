mapboxgl.accessToken =
    'pk.eyJ1IjoiZHVtYmxlZGF6IiwiYSI6ImNqcGF5MWoxMDIwODIzcG8zNWVvYWZ3a3IifQ.Gdl3T_gIf1YyK3Wxn10ftg';
let map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
    center: [18.07, 59.33], // starting position [lng, lat]
    zoom: 12 // starting zoom
});


let marker1 = new mapboxgl.Marker({
        draggable: true
    })
    .setLngLat([18.1, 59.33])
    .addTo(map);

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocation);
    } else {
        alert("Du har en gammal webbläsare. Kan inte hitta din position");

    }
    function showLocation(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        alert("Din position är: " + lat + ", " + lon);
    }