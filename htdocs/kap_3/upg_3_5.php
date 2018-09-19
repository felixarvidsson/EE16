<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lånekalkylator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
/* Kontrollera att POST-variablerna finns, dvs första gången. */

if(isset($_POST["belopp"]) && isset($_POST["ranta"]) && isset($_POST["tid"])) {
    /* Ta emot data */
    $belopp = $_POST["belopp"];
    $ranta = $_POST["ranta"];
    $tid = $_POST["tid"];
    $ranta2 = ($ranta / 100 + 1);
    
    /* Om är 1 */
    if ($tid == "1") {
        $kostnad = $belopp * ($ranta / 100 + 1) - $belopp;
        echo "<p>Din lånekostnad blir $kostnad</p>"; 
    }
    
    /* Om är 3 */
    if ($tid == "3") {
        $kostnad = $belopp * ($ranta2) * ($ranta2) * ($ranta2)  - $belopp;
        echo "<p>Din lånekostnad blir $kostnad</p>";
    }
    /* Om är 5 */
    if ($tid == "5") {
        $kostnad = $belopp * ($ranta2) * ($ranta2) * ($ranta2) * ($ranta2) - $belopp;
        echo "<p>Din lånekostnad blir $kostnad</p>";
    }
    
}
?>

    <form action="#" method="post">
        <label for="">Belopp att låna </label><input type="text" name="belopp"><br>
        <label for="">Ränta </label><input type="text" name="ranta"><br>
        Ett års lånetid<input type="radio" name="tid" value="1"><br>
        Tre års lånetid<input type="radio" name="tid" value="3"><br>
        Fem års lånetid<input type="radio" name="tid" value="5"><br>
        <button>Räkna ut</button>
    </form>
</body>

</html>