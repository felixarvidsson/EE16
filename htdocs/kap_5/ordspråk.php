<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tre slumpvalda ordspråk</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
$allaOrdsprak[] = "Alla vägar bär till Rom.";
$allaOrdsprak[] = "Ensam är stark";
$allaOrdsprak[] = "Finns det hjärterum finns det stjärterum.";
$allaOrdsprak[] = "Som man sår får man skörda.";
$allaOrdsprak[] = "Synden straffar sig själv.";
$allaOrdsprak[] = "Tala är silver, tiga är guld.";
$allaOrdsprak[] = "Öga för öga, tand för tand.";
$allaOrdsprak[] = "Är man med i leken får man leken tåla.";
$allaOrdsprak[] = "Var ska sleven vara om inte i gröten.";
$allaOrdsprak[] = "Var dag har nog av sin egen plåga.";

/* Skriv ut en array med allt innehåll */
/* print_r($allaOrdsprak); */

/* Antal positioner i en array */
echo "<h3>Antalet positioner i en array </h3>";
$antalOrdsprak = count($allaOrdsprak);
echo "<p>Jag har $antalOrdsprak i min array</p>";

/* Skriv ut alla ordspråk i arrayen */
echo "<h3>Skriv ut alla ordspråk i arrayen </h3>";
foreach ($allaOrdsprak as $ordsprak) {
    echo "<p>$ordsprak</p>";
}

/* Skriv ut 3 ordspråk, från t.ex. 0, 1, 2 */
echo "<h3>Skriv ut 3 ordspråk, från t.ex. 0, 1, 2</h3>";
for ($i= 0; $i < 3; $i++) { 
    echo "<p>$allaOrdsprak[$i]</p>";
}

/* Skriv alla ordspråk med en for-loop */
echo "<h3>Skriv alla ordspråk med en for-loop</h3>";
for ($i=0; $i < $antalOrdsprak; $i++) { 
    echo "<p>$allaOrdsprak[$i]</p>";
}

/* Slumpa fram 3 olika ordspråk */
echo "<h3>Slumpa fram ett ordspråk 3 gånger</h3>";
/* Skapa en tom array som ska innehålla alla slumptal */
$allaSlumptal = [];
for ($i=0; $i < 3; $i++) { 

    /* Slumpa tre olika slumptal */
    do { 
    /* Slumpa fram ett tal */
    $slumptal = rand(0, 9);
    } while (in_array($slumptal, $allaSlumptal));
        

        $allaSlumptal[] = $slumptal;
        
        /* Skriv ut ordspråket */
        echo "<p>" . $allaOrdsprak[$slumptal] ."</p>";
    }
}



?>
</body>

</html>