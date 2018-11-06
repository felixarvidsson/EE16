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
/* Kontrollera att data finns */
if (isset($_POST["antalVaror"]) &&
   isset($_POST["total"]) &&
   isset($_POST["korgen"])) {
   
    /* Ta emot data */
    $antalVaror = $_POST["antalVaror"];
    $total = $_POST["total"];
    $korgen = $_POST["korgen"];


    $varor = json_decode($korgen);
    echo "<table>";
    echo "<tr>
        <th>Beskrivning</th>
        <th>Styckpris</th>
        <th>Antal</th>
        <th>Summa</th>
        </tr>";
    foreach ($varor as $vara) {
        echo "<tr>";
        echo "<td>$vara->beskrivning</td>";
        echo "<td>$vara->pris</td>";
        echo "<td>$vara->antal</td>";
        echo "<td>$vara->summa kr</td>";
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