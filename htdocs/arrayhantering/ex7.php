<?php
/*
Write a PHP script that inserts a new item in an array in any position. 
Expected Output :
Original array : 
1 2 3 4 5 
After inserting '$' the array is :
1 2 3 $ 4 5
*/
?>
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
    $numbers = ['one', 'two', 'three', 'four', 'five'];
    $x = ['x'];
    array_splice($numbers, 3, 0, $x);
    foreach ($numbers as $key => $value) {
        echo "$value ";
    }

    ?>
</body>
</html>