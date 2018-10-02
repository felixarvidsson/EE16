<!DOCTYPE html>
<html lang="sv">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Datum på svenska</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php
function datum() {

/* Alla dagar i veckan på svenska */
$dagar[1] = "Måndag";
$dagar[2] = "Tisdag";
$dagar[3] = "Onsdag";
$dagar[4] = "Torsdag";
$dagar[5] = "Fredag";
$dagar[6] = "Lördag";
$dagar[7] = "Söndag";

/* Dagens nr */
$dagNr = date("N");

/* Alla månader i året på svenska */
$manader[1] = "Januari";
$manader[2] = "Februari";
$manader[3] = "Mars";
$manader[4] = "April";
$manader[5] = "Maj";
$manader[6] = "Juni";
$manader[7] = "Juli";
$manader[8] = "Augusti";
$manader[9] = "September";
$manader[10] = "Oktober";
$manader[11] = "November";
$manader[12] = "December";

$manadNr = date("n");
$datumNr = date("d");
$ar = date("Y");

return "$dagar[$dagNr] $datumNr $manader[$manadNr] $ar";

}

echo datum();
?>
</body>

</html>