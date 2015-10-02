<?php 
  
  include 'profil_daten.php';
  

  $host = "localhost";
  $database = "user";
  $user = "root";
  $pass = "";  
  
  $email = $_SESSION['a_email'];
  
  $result = $conn->prepare("SELECT * FROM user WHERE email= :email");
  $result->bindParam(':email', $email);
  $result->execute();

  $rows = $result->fetch(PDO::FETCH_NUM);
                            
  $datum = date("m.d.y");
  $text = $_REQUEST['post']; 
  
  $test = "test";
  $result = $conn->prepare('INSERT INTO profil (Vorname,Nachname,Datum,Text) values(:vorname,:nachname,:datum,:text)');
  $result->bindParam(':vorname',$rows[1]);
  $result->bindParam(':nachname',$rows[2]); 
  $result->bindParam(':datum', $datum);
  $result->bindParam(':text', $text);
  $result->execute(); 
  
  header("location: ../profil.html");
?>