<?php
session_start();
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="kontainer nyVara">
    <header>
        <h1>Shopsmart</h1>
        <nav>
            <a href="./ny_vara.php">Ny vara</a>
            <a href="./lista_vara.php">Handla</a>
            <?php
if(!isset($_SESSION['anamn'])) {
    echo "<a href=\"./login.php\">Logga in</a>";
} else {
    echo "<a href=\"./logout.php\">Logga ut</a>";
}

?>
        </nav>
        <h2>Inloggning</h2>
    </header>

    <main>

        <body>
            <?php
/* Kontrollera att POST-variablerna finns, dvs första gången. */
if(isset($_POST["anamn"]) && isset($_POST["losen"])) { 
    
    /* Ta emot data */
    $anman = $_POST["anamn"];
    $losen = $_POST["losen"];
    
    /* Kontrollera uppgifter */
    if ($anman == "felix" && $losen == "arvidsson") {
        $_SESSION['anamn'] = "felix";
        header('Location: ny_vara.php');
    }  
    
}
?>
            <form action="login.php" method="post">
                <label>Användarnamn</label><input type="text" name="anamn"><br>
                <label>Lösenord</label><input type="password" name="losen"><br>
                <button>Logga in</button>
            </form>
    </main>
    <footer>
        Felix Arvidsson 2018
    </footer>
    </body>

</html>