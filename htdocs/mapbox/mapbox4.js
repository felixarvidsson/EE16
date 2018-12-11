window.onload = start;

function start() {
    const eBox = document.querySelector(".platser");
    const eKnapp = document.querySelector("button");
    const url = "platser.php";

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
        eBox.innerHTML += "<input type=\"text\"> <input type=\"text\">";
    }
    
    eKnapp.addEventListener("click", sparaPlats);
    function sparaPlats() {
        
        /* Anropa ajax till webbtjänsten */
        let ajax = new XMLHttpRequest();
        ajax.addEventListener("loadend", sparaPlatser);
        function sparaPlatser() {
            console.log(this.responseText);
            
            if (this.responseText == "success") {
                alert("Platserna har skickats!")
            }
        }
        ajax.open("POST", url, true);

        /* Läs av innehållet */
        let formData = new FormData();
        formData.append("coordinates", eBox.value);
        formData.append("beskrivning", eBeskrivning.value);
       
        /* Skicka data till php-fil */
        ajax.send(formData);
    }
}