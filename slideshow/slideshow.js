/* Kör koden när webbsidan laddats klart */
window.onload = start;

function start() {
    /* Variabler vi behöver */
    var bilder = [
        './foton/claudio-testa-389799-unsplash.jpg',
        './foton/jeremy-bishop-527439-unsplash.jpg',
        './foton/mark-harpur-748500-unsplash.jpg',
        './foton/oliver-roos-551237-unsplash.jpg',
        './foton/pascal-debrunner-634122-unsplash.jpg',
        './foton/pietro-de-grandi-329892-unsplash.jpg',
        './foton/pine-watt-462535-unsplash.jpg'
    ];

    /* Lista på alla element vi använder */
    const elementYta = document.querySelector('.yta');
    const elementFram = document.querySelector('.fa-arrow-circle-left');
    const elementBak = document.querySelector('.fa-arrow-circle-right');

    /* Lyssna på klick bakåt eller framåt */
    elementFram.addEventListener('click', bildFram);
    elementBak.addEventListener('click', bildBak);

    /* Gå till nästa bild */
    function bildFram() {

    }
        /* Gå tillbaka till föregående bild */
        function bildBak() {

        }
}