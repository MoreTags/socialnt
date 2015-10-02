<?php        
  session_start(); 
  
  $host = "localhost";
  $database = "user";
  $user = "root";
  $pass = "";
  
  $conn = new PDO("mysql:host=$host;dbname=$database",$user,$pass);
 
  $email = $_SESSION['a_email'];
  

 

  $result = $conn->prepare("SELECT * FROM user WHERE email= :email");
    $result->bindParam(':email', $email);

  $result->execute();

  $rows = $result->fetch(PDO::FETCH_NUM);

  echo '<b>' . $rows[1] . " " . $rows[2];

            
 
?>