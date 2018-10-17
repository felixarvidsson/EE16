/* När webbsidan laddats klart, kör start() */
window.onload = start;

function start() {

    /* Lyssna på klick på hela sidan */
    const elementKontainer = document.querySelector('.kontainer');
    elementKontainer.addEventListener('click', klick);

    /* Vad händer när man klickat på sidan? */
    function klick(e) {
        console.log('Nu har vi en klick event på ' + e.target.nodeName);

        /* Har man klickat på en cell (td) */
        if (e.target.nodeName === 'TD') {
            rakna(e.target);
        }
    }
    /* Nu räknar man */
    function rakna(cell) {
        console.log('Klick i en cell');

        /* Leta rätt på närmast #antal, #pris, #summa & #korgen */
        const foralder = cell.parentNode.parentNode.parentNode.parentNode;
        const elementAntal = foralder.querySelector('#antal');
        const elementPris = foralder.querySelector('#pris');
        const elementSumma = foralder.querySelector('#summa');
        const elementKorgen = document.querySelector('#korgen');
        const elementAntalVaror = document.querySelector('#antalVaror');

        /* Hämta innehållet i elementen */
        var antal = parseInt(elementAntal.textContent);
        var pris = parseInt(elementPris.textContent);
        var summa = parseInt(elementSumma.textContent);
        var korgen = parseInt(elementKorgen.textContent);
        var antalVaror = parseInt(elementAntalVaror.textContent);

        /* Klickade man i cellen #plus? */
        if (cell.id === 'plus') {
            /* Räkna upp */
            antal++;

            /* Räkna om summan */
            var summa = pris * antal;

            /* Skriva tillbaka */
            elementAntal.textContent = antal;
            elementSumma.textContent = summa;
        }

        /* Klickade men i cellen #minus? */
        if (cell.id === 'minus') {
            /* Räkna ned om större än 0 */
            if (antal > 0) {
                antal--;
            }

            /* Räkna om summan */
            var summa = pris * antal;

            /* Skriva tillbaka */
            elementAntal.textContent = antal;
            elementSumma.textContent = summa;
        }

        /* Klickade man i cellen #kop? */
        if (cell.id === 'kop') {
            /* Addera antal * summa */
            korgen = korgen + summa;

            /* Räkna upp totala antal varor */
            antalVaror = antalVaror + antal; 

            /* Skriv tillbaka */
            elementKorgen.textContent = korgen;
            elementAntalVaror = antalVaror;
        }
    }
}