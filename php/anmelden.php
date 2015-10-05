<?php
  
  session_start();          
                                
  $email = $_REQUEST['a_email'];
  $_SESSION['a_email'] = $email;
  
  $errmsg_arr = array();
  $errflag = false;
  
  $host = "localhost";
  $database = "user";
  $user = "root";
  $pass = "";  

 // $dbh = new PDO("mysql:host=$host;dbname=$database",$user,$pass);

$conn = new PDO("mysql:host=$host;dbname=$database",$user,$pass);
 
// new data
 
$user = $_REQUEST['a_email'];
$password = $_REQUEST['a_password'];
  

 
// query
$result = $conn->prepare("SELECT * FROM user WHERE email= :email AND passwort= :passwort");
$result->bindParam(':email', $user);
$result->bindParam(':passwort', $password);
$result->execute();

$rows = $result->fetch(PDO::FETCH_NUM);

if($rows > 0) {

  header("location: ../profil.php");
}

else{
	$errmsg_arr[] = 'Username and Password are not found';
	$errflag = true;
}

if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: ../index.html");
	exit();
}


?>
