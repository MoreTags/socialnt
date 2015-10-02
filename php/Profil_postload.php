<?php
  
  echo '<html><head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="../css/post.css">
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
    echo'<div class="post">';
    print $row["Vorname"] . " " . $row["Nachname"] . " " . $row["Datum"] . "<br>" . $row["Text"] . "<br><br><p>L&ouml;schen</p>"; 
    echo'</div>';
  }
  echo '</body></html>';
?>