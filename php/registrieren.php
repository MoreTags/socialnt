<?php

  $host = "localhost";
  $database = "user";
  $user = "root";
  $pass = "";  

  $dbh = new PDO("mysql:host=$host;dbname=$database",$user,$pass);
    

  $vorname = $_REQUEST['vornamen'];
  $nachname = $_REQUEST['nachnamen'];
  $email = $_REQUEST['email'];
  $passwort = $_REQUEST['passwort'];



  $stmt = $dbh->prepare('INSERT INTO user(email,vornamen,nachnamen,passwort) VALUES (:email,:vorname,:nachname,:passwort)');

  $stmt->bindParam(':email',$email,PDO::PARAM_STR);
  $stmt->bindParam(':vorname',$vorname,PDO::PARAM_STR);
  $stmt->bindParam(':nachname',$nachname,PDO::PARAM_STR);
  $stmt->bindParam(':passwort',$passwort,PDO::PARAM_STR);
  
  $stmt->execute();
  

   header('location:..\index.html'); 


?>
