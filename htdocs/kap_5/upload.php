<?php
/* Kolla att man klickat på laddaupp-knappen> */
if (isset($_POST["submit"])) {
    $filen = $_FILES["filen"];
    
    /* Plocka ut filnamnet */
    $fileName = $filen["name"];
    echo "<p>Filens namn är $fileName</p>";
    
    /* Plocka ut filtypen */
    $fileType = $filen["type"];
    echo "<p>Filens typ är $fileType</p>";
    
    /* Plocka ut tempName */
    $fileTempName = $filen["tmp_name"];
    echo "<p>Filens temporära namn är $fileTempName</p>";
    
    /* Plocka ut filstorleken */
    $fileSize = $filen["size"];
    echo "<p>Filens storlek i byte är $fileSize</p>";
    
    /* Plocka ut felmeddelanden */
    $fileError = $filen["error"];
    echo "<p>Filens felmeddelande är $fileError</p>";
    
    /* Plocka ut filändelse */
    $fileExt = explode("image/", $fileType);
    echo "<p>Filens filändelse är $fileExt[1]</p>";
    
    /* Tillåtna filformat att ladda upp */
    $allowedType = ["png", "jpeg", "pdf", "gif"];
    
    /* Felmeddelanden */
    $errors = array(
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
        3 => 'The uploaded file was only partially uploaded',
        4 => 'No file was uploaded',
        6 => 'Missing a temporary folder',
        7 => 'Failed to write file to disk.',
        8 => 'A PHP extension stopped the file upload.',
    );
    
    
    /* Är filens format tillåtet? */
    if (in_array($fileExt[1], $allowedType)) {
        echo "<p>Fil tillåten</p>";
        
        /* Nästa steg - blev något fel? */
        if ($fileError == 0) {
            /* Skapa nytt unikt filnamn för att inte skriva över gamla filer */
            $fileNewName = uniqid("", true) . "." . $fileExt[1];
            
            /* Hela sökvägen till den nya filen */
            $fileDestination = "./bilder/$fileNewName";
            echo "<p>$fileDestination</p>";
            
            /* Flytta filen rätt */
            move_uploaded_file($fileTempName, $fileDestination);
            echo "<p>Lyckad uppladdning.</p>";
            header("Location:filuppladdning.php?uploadsuccess");
            
        } else {
            echo "<p>Något gick fel: $errors[fileError]</p>";
        }
    } else {
        echo "<p>Vänligen välj rätt format på filen.</p>";
    }
    
    
}
?>