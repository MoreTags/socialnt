<?php

    $host = "localhost";
    $database = "user";
    $user = "root";
    $pass = "";
 $db = new PDO("mysql:host=$host;dbname=$database",$user,$pass);
$stmt = $db->prepare("insert into images (imgdata, imgtype) values (?, ?)");
    $id = $_REQUEST['uid'];
    $filename = $_REQUEST['file'];

    $id = "2"; // Eine Funktion zum Allokieren der neuen ID

    // Wir nehmen an, das Skript läuft als Teil eines Datei-Upload-Formulars
    // Sie finden weitere Informationen in der PHP-Dokumentation

    $fp = fopen( "C:\Users\Domin\Pictures\pb.png", 'rb');

    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $fp, PDO::PARAM_LOB);

    $stmt->execute();
?>