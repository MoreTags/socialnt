<?php

echo 

'<!DOCTYPE HTML>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Ihr Profil</title> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <!----<script src="js/profil.js"></script>!--->       
  <link rel="stylesheet" href="css/profil.css">
</head>
<body>
	<div class="menu"></div>  

	<div class="banner"></div> 
 

  <div class="pic">     
    <div class="fileinputs">
    	<input type="file" class="file" />
	      <div class="fakefile">
		      <img class="upload" src="ico/upload.PNG"/>
	      </div>
    </div>
  </div>
  
  <div class="inhalt">';

    echo $email = $_SESSION['a_email'];
    echo "test";
   
echo '
</div> 
</body>
</html>';

?>