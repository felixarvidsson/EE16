<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
/* Ta emot data */
$anman = $_POST["anamn"];
$losen = $_POST["losen"];

/* Kontrollera uppgifter */
if ($anman == "felix" && $losen == "arvidsson") {
    echo "<p>$anman, du är inloggad</p>";
    
} else {
    /* Hoppa tillbaka till inloggningsrutan */
    header("location: upg_3_2.php");
    die();
    
}

?>
</body>

</html>