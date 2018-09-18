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
            echo "<p>Tal 1 måste vara lägre än tal 2.</p>";
        }
       
    }

    ?>

    <form action="upg_3_3b.php" method="post">
        <label>Tal ett </label><input type="text" name="tal1"><br>
        <label>Tal två </label><input type="text" name="tal2"><br>
        <button>Klicka mig!</button>
    </form>
</body>

</html>