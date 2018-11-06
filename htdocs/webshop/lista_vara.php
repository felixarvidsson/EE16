<?php

/*
* Läsa in alla varor och skapa en varusida
* PHP version 7
* @category   Webshop
* @author     Felix Arvidsson <felix.arvidsson@hotmail.se>
* @license    PHP CC
*/
?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webshop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="kontainer listaVara">
        <header>
            <h1>Shopsmart</h1>
            <nav>
                <a href="./ny_vara.php">Ny vara</a>
                <a href="./lista_vara.php">Handla</a>
                <?php
if(!isset($_SESSION['anamn'])) {
    echo "<a href=\"./login.php\">Logga in</a>";
} else {
    echo "<a href=\"./login.php\">Logga ut</a>";
}
?>
            </nav>
            <h2>Alla varor</h2>
            <form id="korg" method="post" action="kassa.php">
                <input id="antalVaror" type="text" value="0" name="antalVaror" readonly>
                <input id="total" type="text" value="0 kr" name="total" readonly>
                <input id="korgen" type="hidden" name="korgen" readonly>
                <button id="tom" class="fas fa-trash-alt" type="reset"></button>
                <button id="kassan" disabled>Kassan</button>
            </form>
        </header>
        <main>
            <?php
/* Öppna textfilen och läs hela innehållet */
$allaRader = file("beskrivning.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

/* Loppa igenom rad för rad */
foreach ($allaRader as $rad) {
    
    /* Plocka isär raden idess beståndsdelar */
    $delar = explode("¤", $rad);

    /* Om raden inte innehåller tre delar, hoppa över */
    if (sizeof('$delar') != 3) {
        continue;
    }
    
    $beskrivning = $delar[0];
    $pris = $delar[1]; 
    $bilden = $delar[2];
    
    /* Skriv ut info och HTML */
    echo "<div class=\"vara\">\n"; 
    echo "<img src=\"./varor/$bilden\" alt=\"$beskrivning\">\n";
    echo "<p id=\"beskrivning\">$beskrivning</p>\n";
    echo "<p>Styckpris: <span id=\"pris\">$pris</span> kr</p>\n";
    echo "<p>Summa: <span id=\"summa\">$pris</span> kr</p>\n";
    
    echo "<table class=\"kontroll\">\n";
    echo "<tr>\n";
    echo "<td id=\"antal\" rowspan=\"2\">1</td>\n";
    echo "<td id=\"plus\">+</td>\n";
    echo "<td id=\"kop\" rowspan=\"2\">KÖP</td>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    echo "<td id=\"minus\">-</td>\n";
    echo "</tr>\n";
    echo "</table>\n";
    echo "</div>\n";
}  

?>
        </main>
        <footer>
            Felix Arvidsson 2018
        </footer>
    </div>
    <script src="skript2.js"></script>
</body>

</html>