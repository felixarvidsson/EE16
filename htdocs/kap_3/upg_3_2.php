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
    /* Kolla att get-variablen finns */
    if (isset ($_GET["fel"])) {
        $fel = $_GET["fel"];
        if ($fel == 1) {
            echo "<p>Fel användarnamn eller lösenord. Var god försök igen.</p>";
        }
       
    }

    ?>
    <h4>Var vänlig logga in!</h4>
    <form action="upg_3_2b.php" method="post">
        <label>Användarnamn</label><input type="text" name="anamn"><br>
        <label>Lösenord</label><input type="password" name="losen"><br>
        <button>Logga in</button>
    </form>
</body>

</html>