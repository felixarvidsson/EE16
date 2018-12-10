/* Starten */
window.onload = start;

function start() {

    /* Lista på alla elementen vi behöver jobba med */
    const eGodkand = document.querySelector("#godkand");
    const eGiltig = document.querySelector("#giltig");
    const eBetalt = document.querySelector("#betalt");
    const eMomssats = document.querySelector("#momssats");
    const eBelopp = document.querySelector("#belopp");
    const eTotal = document.querySelector("#total");
    const eKnapp = document.querySelector("button");

    eKnapp.addEventListener("click", registreraKvitto);

    function registreraKvitto() {
        /* Läs av alla värden */
        let godkand = eGodkand.checked;
        let giltig = eGiltig.checked;
        let betalt = eBetalt.checked;
        let momssats = eMomssats.value;
        let belopp = Number(eBelopp.value);
        console.log(godkand);
        console.log(giltig);
        console.log(betalt);
        console.log(momssats);
        console.log(belopp);
        
        /* Räkna ut belopp + vald momssats */
        let total = belopp * (1 + momssats / 100);

        /* Om kvittot är godkänt, giltigt och betalt */
        if (godkand && giltig && betalt) {

            /* Skriv ut totalen på webbsidan */
            eTotal.value = total;
        } else {
            alert("Fyll i rutorna!");
        }

    }
}