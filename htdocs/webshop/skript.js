/* När webbsidan laddats klart, kör start */
window.onload = start;

function start() {

    /* Anslut till elementen vi behöver jobba med */
    const elementTable = document.querySelector('table');
    console.log('Jag har hittat elementet: ', elementTable);

    const elementPlus = document.querySelector('#plus');
    console.log(elementPlus);

    const elementMinus = document.querySelector('#minus');
    console.log(elementMinus);

    const elementKop = document.querySelector('#kop');
    console.log(elementKop);

    const elementAntal = document.querySelector('#antal');
    console.log(elementAntal);
   
    const elementPris = document.querySelector('#pris');
    console.log(elementPris);

    const elementSumma = document.querySelector('#summa');
    console.log(elementSumma);
    

    /* Lyssna på händelser */
    elementPlus.addEventListener('click', plus);
    elementMinus.addEventListener('click', minus);
    elementKop.addEventListener('click', kop);

    /* Räkna upp antal av en vara  */
    function plus() {
        /* Läs av antal och summan */
        var antal = elementAntal.textContent;
        var pris = elementPris.textContent;

        /* Räkna upp */
        antal++;

        /* Räkna upp summan */
        summa = pris * antal;

        /* Skriva tillbaka */
        elementAntal.textContent = antal;
        elementSumma.textContent = summa;
    }
    /* Räkna ned antal vara en vara */
    function minus() {
        /* Läs av antal */
        var antal = elementAntal.textContent;

        /* Räkna ned om större än 0 */
        if (antal > 0) {
            antal--;
        }
        /* Skriva tillbaka */
        elementAntal.textContent = antal;
    }

    function kop() {
        /* Läs av korgen */

        /* Addera antal * summa */

        /* Skriv tillbaka */
    }
}