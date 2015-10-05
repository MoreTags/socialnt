<?php
  $host = "localhost";
  $database = "user";
  $user = "root";
  $pass = "";
  $conn = new
      
PDO("mysql:host=$host;dbname=$database",$user,$pass);
$stmt = $db->prepare("select contenttype, imagedata from images where id=?");
$stmt->execute(array($_GET['id']));
$stmt->bindColumn(1, $type, PDO::PARAM_STR, 256);
$stmt->bindColumn(2, $lob, PDO::PARAM_LOB);
$stmt->fetch(PDO::FETCH_BOUND);

header("Content-Type: $type");
fpassthru($lob);
?>