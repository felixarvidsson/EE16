<?php
session_start();
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Session</h1>
    <ul>
        <li><a href="session.php">HOME</a></li>
        <li><a href="contact.php">CONTACT</a></li>
    </ul>

<?php
    
$_SESSION['username'] = "dumbledaz";
echo $_SESSION['username'];

if (!isset($_SESSION['username'])) {
    echo "<p>You are not logged in!</p>";
} else {
    echo "<p>You are logged in!</p>"
}

?>
</body>
</html>