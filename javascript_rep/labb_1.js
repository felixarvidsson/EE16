/* Kör koden när webbsidan laddat klart */
window.onload = init;

function init() {


    document.querySelector("#knapp").addEventListener('click', skrivHälsning)
    
    
}
function skrivHälsning() {
        /* Läs in text */
    var namn = document.querySelector("#namn").value;
    
    /* Skriv ut text */
    var svar = document.querySelector("#svar").textContent = 'Hej ' + namn + ' vad kul att du är här';
}