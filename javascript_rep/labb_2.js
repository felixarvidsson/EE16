/* Kör koden när webbsidan laddat klart */
window.onload = init;

function init() {
/* Lyssna på knappen */
    document.querySelector("#knapp").addEventListener("click", skrivUt);

}

function skrivUt() {
    /* Skapa ett slumptal */
    var slumptal = Math.floor(Math.random() * 100 + 1);
    /* Skriv ut slumptalet */
    document.querySelector("#svar").textContent = slumptal;
}

