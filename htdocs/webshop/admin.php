<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer"></div>
    <header>
        <h1>Shopsmart</h1>
    </header>
    <main>
        <?php
/* Kontrollera att POST-variablerna finns, dvs första gången. */
if (isset($_POST['anamn']) && isset($_POST['losen'])) {
/* Ta emot data */
$anamn = filter_input(INPUT_POST, 'anamn', FILTER_SANITIZE_STRING);
$losen = filter_input(INPUT_POST, 'losen', FILTER_SANITIZE_STRING);

    /* Spara ned ny rad som anamn¤losen i filen admin.txt */
    $handtag = fopen($_SERVER['DOCUMENT_ROOT'] . '/../config/admin.txt', 'a');
    $hash = password_hash($losen, PASSWORD_DEFAULT);
    fwrite($handtag, $anamn . '¤' . $hash . PHP_EOL);
    fclose($handtag);
    echo "<script>alert('Användaren har registrerats!');</script>";
}
?>
        <form action="#" method="post">
            <label>Användarnamn</label><input type="text" name="anamn"><br>
            <label>Lösenord</label><input type="password" name="losen"><br>
            <button>Registrera</button>
        </form>
    </main>

    <footer>
        Shopsmart 2018
    </footer>

</body>

</html>