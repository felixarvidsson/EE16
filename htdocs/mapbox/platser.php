<?php
/* Verifiera data */
if (isset($_POST["coordinates"]) && isset($_POST["beskrivning"])) {
    
    /* Ta emot data */
    $coordinates = filter_input(INPUT_POST, "coordinates", FILTER_SANITIZE_STRING);
    $beskrivning = filter_input(INPUT_POST, "beskrivning", FILTER_SANITIZE_STRING);
    
    /* Dela upp strängen i en array */
    $listaCoordinates = explode("\n", $coordinates);
    $listaBeskrivning = explode("\n", $beskrivning);
    
    /* Ta bort sista delen ifrån arrayen */
    array_pop($listaCoordinates);
    array_pop($listaBeskrivning);
    
    echo "success";
    /* Spara ned platsinformationen i en textfil */
    $handtag = fopen("platsinfo.txt", 'w');
    foreach ($listaCoordinates as $key => $coordinate) {
        fwrite($handtag, $coordinate . " " . $listaBeskrivning[$key] . PHP_EOL);
    }
    fclose($handtag);
    
    /* Error-meddelande */
} else {
    echo "misslyckades";
}