<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    /* Kontrollera att POST-variablerna finns, dvs första gången. */
    
    if(isset($_POST["tal1"]) && isset($_POST["tal2"])) {
/* Ta emot data */
$tal1 = $_POST["tal1"];
$tal2 = $_POST["tal2"];

/* Kontrollera uppgifter */
if ($tal1 > $tal2 ) {
    echo "<p>Tal 1 måste vara lägre än tal 2.</p>";
    }
} else {
    
    for ($i=$tal1 + 1; $i < $tal2; $i++) { 
        echo "$i ";
    }
}
?>

    <form action="#" method="post">
        <label>Tal ett </label><input type="text" name="tal1"><br>
        <label>Tal två </label><input type="text" name="tal2"><br>
        <button>Skriv ut!</button>
    </form>
</body>

</html>