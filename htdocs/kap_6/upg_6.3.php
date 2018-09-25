<?php
/*
Gör ett formulär där användaren ska fylla i namn, adress, postnr och postort.

Kontrollera att alla fälten är ifyllda, och innehåller minst 3 tecken.
Kontrollera att postnumret innehåller 5 tecken och att de tecknen endast är siffror.
* PHP version 7
* @category   Formulär
* @author     Felix Arvidsson <felix.arvidsson@hotmail.se>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">

<link rel="stylesheet" href="style.css">
</head>

<body>
<?php
/* Kontrollera data */
if (isset($_POST["namn"]) && isset($_POST["adress"]) && isset($_POST["postnr"]) && isset($_POST["postort"]) ) { 
    /* Ta emot data */
    $namn = $_POST["namn"];
    $adress = $_POST["adress"];
    $postnr = $_POST["postnr"];
    $postort = $_POST["postort"];
    $email = $_POST["email"];
    $fel = 0;
    
    /* Rensar mellanslag på på postnumret  */
    $postnr = str_replace($postnr, ' ', '');
    
    /* Kontrollera att alla fälten är ifyllda */
    if (strlen($namn) == 0) {
        echo "<p>Varning: Var god fyll i namnet!</p>";
        $fel++;
    }
    if (strlen($adress) == 0) {
        echo "<p>Varning: Var god fyll i adressen! </p>";
        $fel++;
    }
    if (strlen($postnr) == 0) {
        echo "<p>Varning: Var god fyll i postnr! </p>";
        $fel++;
    }
    if (strlen($postort) == 0) {
        echo "<p>Varning: Var god fyll i postort! </p>";
        $fel++;
    }
    if (strlen($email) == 0) {
        echo "<p>Varning: Var god fyll i email! </p>";
        $fel++;
    }
    /* Kontrollera att alla fälten innehåller minst 3 tecken */
    if (strlen($namn) < 3) {
        echo "<p>Varning: Alla fält måste innehålla minst tre tecken!";
        $fel++;
    }
    if (strlen($adress) < 3) {
        echo "<p>Varning: Alla fält måste innehålla minst tre tecken!";
        $fel++;   
    }
    if (strlen($postnr) < 3) {
        echo "<p>Varning: Alla fält måste innehålla minst tre tecken!";
        $fel++;
    }
    if (strlen($postort) < 3) {
        echo "<p>Varning: Alla fält måste innehålla minst tre tecken!";
        $fel++;
    }
    
    
    
    /* Kontroller att postnumret innehåller 5 tecken och att de tecknen endast är siffror */
    if (strlen($postnr) != 5) {
        echo "<p>Varning: Postnumret måste vara 5 tecken långt!</p>";
        $fel++;
    }
    if (!ctype_digit($postnr)) {
        echo "<p>Varning: Postnumret får endast innehålla siffror!</p>";
        $fel++;
    } 
    
    /* Kontrollera att email innehåller ett @ och . */
    if (!strpos($email , '@')) { 
        echo "<p>Email måste innehålla @!</p>";
        $fel++;
    }
    
    if (!strpos($email , '.')) { 
        echo "<p>Email måste innehålla .!</p>";
        $fel++;
    }
    if ($fel == 0) {
        ?>
        <form action="#" method="post">
        <label>Namn </label><input type="text" name="namn"><br>
        <label>Email </label><input type="text" name="email"><br>
        <label>Address </label><input type="text" name="adress"><br>
        <label>Postnr </label><input type="text" name="postnr"><br>
        <label>Postort </label><input type="text" name="postort"><br>
        <button>Skicka in</button>
        </form>
        <?php
    } else {
        ?>
        <form action="#" method="post">
        <label>Namn </label><input type="text" name="namn" value="<?php echo $namn ?>"><br>
        <label>Email </label><input type="text" name="email" value="<?php echo $email ?>"><br>
        <label>Address </label><input type="text" name="adress" value="<?php echo $adress ?>"><br>
        <label>Postnr </label><input type="text" name="postnr" value="<?php echo $postnr ?>"><br>
        <label>Postort </label><input type="text" name="postort" value="<?php echo $postort ?>"><br>
        <button>Skicka in</button>
        </form>
        <?php
    }
}
?>
</body>

</html>