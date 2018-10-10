<?php
/*
* Läsa in alla varor och skapa en varusida
* PHP version 7
* @category   Webshop
* @author     Felix Arvidsson <felix.arvidsson@hotmail.se>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Läsa inlägg</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kontainer">
<h1>Alla varor</h1>

<?php
/* Öppna textfilen och läs hela innehållet */
$allaRader = file("beskrivning.txt");

/* Loppa igenom rad för rad */
foreach ($allaRader as $rad) {

    /* Plocka isär raden idess beståndsdelar */
    $delar = explode("¤", $rad);
    $beskrivning = $delar[0];
    $pris = $delar[1];
    $bilden = $delar[2];

    /* Skriv ut info och HTML */
    echo "<div class=\"vara\">\n"; 
    echo "<img src=\"./varor/$bilden\" alt=\"$beskrivning\">\n";
    echo "<p>$beskrivning</p\n";
    echo "<p>$pris kr</p\n";
    echo "<hr>\n";
    echo "</div>\n";
}  
?>
</div>
</body>
</html>

