/* 
* Enkelt bildgalleri.
* Visa bilden större när man klickar på knappen.
*/

/* När webbsidan laddats klart kör start() */
window.onload = start;

/* Start-delen */
function start() {
    
    /* Vilka element arbetar vi med? */
    const elementImg = document.querySelector('img');
    const elementKnapp1 = document.querySelector('.knapp1');
    const elementKnapp2 = document.querySelector('.knapp2');
    const elementKnapp3 = document.querySelector('.knapp3');
    const elementKnapp4 = document.querySelector('.knapp4');
    const elementBildText = document.querySelector('.bildtext');

    /* Vilka händelser behöver vi lyssna på? */
    elementKnapp1.addEventListener('click', visaBild1);
    elementKnapp2.addEventListener('click', visaBild2);
    elementKnapp3.addEventListener('click', visaBild3);
    elementKnapp4.addEventListener('click', visaBild4);
    

    /* Vad ska hända när man klickat på knapp1? */
    function visaBild1() {
        elementImg.src = "./bilder/eberhard-grossgasteiger-579118-unsplash.jpg";
        elementBildText.textContent = "Photo by Eberhard Grossgasteiger on Unsplash";
    }
    function visaBild2() {
        elementImg.src = "./bilder/laura-smetsers-797358-unsplash.jpg";
        elementBildText.textContent = "Photo by Laura Smetser on Unsplash";
    }
    function visaBild3() {
        elementImg.src = "./bilder/laurel-balyeat-32668-unsplash.jpg";
        elementBildText.textContent = "Photo by Laurel Balyeat on Unsplash";
    }
    function visaBild4() {
        elementImg.src = "./bilder/studio-dekorasyon-5272-unsplash.jpg";
        elementBildText.textContent = "Photo by Studio Dekorasyon on Unsplash";
    }

}