<?php

include 'settings.php';  

  echo '<html><head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        </head><body>'; 
        
        
  $host = "localhost";
  $database = "user";
  $user = "root";
  $pass = "";

  $email = $_SESSION['a_email'];
  
  $conn = new PDO("mysql:host=$host;dbname=$database",$user,$pass);
  
  $result = $conn->prepare("SELECT * FROM user WHERE email= :email");
  $result->bindParam(':email', $email);
  $result->execute(); 
  
  $row = $result->fetch(PDO::FETCH_NUM);           
  
  $search_vn = $row[1];
  $search_nn = $row[2];
  
  $postconn = new PDO("mysql:host=$host;dbname=$database",$user,$pass);
  
  $post = $postconn->prepare("SELECT * FROM profil WHERE Vorname= :vorname AND Nachname= :nachname");
  $post->bindParam(':vorname', $search_vn);
  $post->bindParam(':nachname',$search_nn);
  $post->execute();
  
  $exec = $post->FetchAll();
   

  foreach($exec as $row) {
    echo'<div align="left" class="w3-card-2 w3-light-grey" style="width:500px;">';
    print $row["Vorname"] . " " . $row["Nachname"] . " " . $row["Datum"] . "<br>" . $row["Text"]; echo '<br><br><button class="w3-btn w3-red">Löschen</button><br>'; 
    echo'</div><br>';
  }
  echo '</body></html>';
?>