<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Min enkla blogg</title>
    <link rel="stylesheet" href="./css/lux.epic.css">
</head>
<body>
    <h1>Min enkla blogg</h1>
    <nav>
        <ul>
            <li><a href="index.php">Hemsida</a></li>
            <li><a href="skriva.php">Skriv inlägg</a></li>
            <li><a href="lasa.php">Läs inlägg</a></li>
        
        </ul>

    </nav>
    <form action="spara.php" method="post">
        <label for="inlagg">Inlägg</label>
        <textarea class="form-control" name="inlagg" id="inlagg" cols="30" rows="10"></textarea>
        <button class="btn btn-primary">Spara inlägg</button>
    </form>
</body>
</html>