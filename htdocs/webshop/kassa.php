<?php
session_start();
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kassa</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer kassa">
        <header>
            <h1>Kassan</h1>
            <h1>Shopsmart</h1>
            <h2>Ny vara</h2>
        </header>
        <main>
<?php
    /* Ta emot data */
    $antalVaror = filter_input(INPUT_POST, 'antalVaror', FILTER_SANITIZE_NUMBER_INT);
    $total = filter_input(INPUT_POST, 'total', FILTER_SANITIZE_NUMBER_INT);
    $varor = json_decode($_POST['korgen']);

/* Kontrollera att data finns */
if ($antalVaror && $total && $varor) { 

    echo "<table>";
    echo "<tr>
        <th>Beskrivning</th>
        <th>Styckpris</th>
        <th>Antal</th>
        <th>Summa</th>
        </tr>";

        /* Gå igenom alla varor en för en */
    foreach ($varor as $vara) {

        /* Rensa från skräp och hot */
        $beskrivning = filter_var($vara->beskrivning, FILTER_SANITIZE_STRING);
        $antal = filter_var($vara->antal, FILTER_SANITIZE_NUMBER_INT);
        $pris = filter_var($vara->pris, FILTER_SANITIZE_NUMBER_INT);
        $summa = filter_var($vara->summa, FILTER_SANITIZE_NUMBER_INT);

        echo "<tr>";
        echo "<td>$beskrivning</td>";
        echo "<td>$pris</td>";
        echo "<td>$antal</td>";
        echo "<td>$summa kr</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<div class=\"total\">";
    echo "<p>Antal varor: $antalVaror</p>";
    echo "<p>Totalsumma : $total</p>";
    echo "</div>";

}
?>
        </main>
        <footer>
            Felix Arvidsson 2018
        </footer>
    </div>
</body>
</html>