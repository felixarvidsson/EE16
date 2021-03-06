<?php
include_once("../../admin/konfig_db.php");

session_start();
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adressregister</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h3>Inloggning</h3>
        <nav>
            <a href="logga_in_db.php">Logga in</a>
            <a href="registrera_db.php">Registrera</a>
            <a href="lista_db.php">Lista</a>
        </nav>
        <?php

/* Kontrollera att POST-variablerna finns, dvs första gången. */
if (isset($_POST['anamn']) && isset($_POST['losen'])) {
    /* Ta emot data */
    $anamn = filter_input(INPUT_POST, 'anamn', FILTER_SANITIZE_STRING);
    $losen = filter_input(INPUT_POST, 'losen', FILTER_SANITIZE_STRING);
    
    /* Logga in på databasen, och skapa en anslutning */
    $conn = new mysqli($hostname, $user, $password, $databas);
    
    /* Fungerade anslutningen? */
    if ($conn->connect_error) {
        die("Kunde inte ansluta till databasen: " . $conn->connect_error);
    } else {
        /* echo "<p>Anslutningen lyckades!</p>"; */
    }
    
    /* Skapa sql-frågan vi skall köra */
    $sql = "SELECT * FROM admin  WHERE anamn = '$anamn';";
    $result = $conn->query($sql);
    
    /* Gick det bra? Kunde SQL-satsen köras? */
    if (!$result) {
        die("Det blev fel med SQL-satsen.");
    } else {
        $rad = $result->fetch_assoc();
        
        if (password_verify($losen, $rad['hash'])) {
            echo "<p>Du är inloggad=)</p>";
        } else {
            echo "<p>Felaktig inloggningsinformation</p>";
        }
        
        /* Gick det bra? Kunde SQL-satsen köras? */
        if (!$result) {
            die("Det blev fel med SQL-satsen.");
        } else {
        }
    }
    
    /* Stänger ned anslutningen */
    $conn->close();
}

?>
        <form action="logga_in_db.php" method="post">
            <label>Användarnamn</label><input type="text" name="anamn">
            <label>Lösenord</label><input type="password" name="losen">
            <button>Logga in</button>
        </form>
    </div>
    <?php

?>
</body>

</html>