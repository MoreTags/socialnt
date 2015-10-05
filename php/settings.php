<?php

    error_reporting(0);

            function color_settings_save() //Funktion zum Speichern der Farbeinstellungen einzelner user        
            {
                $host = "localhost";
                $database = "user";
                $user = "root";
                $pass = "";
                
                $color = $_REQUEST['farbe'];
                $user_id = $_REQUEST['uid'];

                $conn = new PDO("mysql:host=$host;dbname=$database",$user,$pass);   
                
                
                if(!empty($color))
                {
                $stmt = $conn->prepare('UPDATE user SET color=:color WHERE u_id=:uid');

                $stmt->bindParam(':color',$color,PDO::PARAM_STR);
                $stmt->bindParam(':uid',$user_id,PDO::PARAM_STR);

                $stmt->execute();
                    
                $i = true;
                    
                if($i == true)
                    header('location:..\profil.php');
                }

            }

            function color_settings_load() //Funktion zum Laden der Farbeinstellungen einzelner user        
            {
                $host = "localhost";
                $database = "user";
                $user = "root";
                $pass = "";
                
                $user_id = $_REQUEST['uid'];
            
                $conn = new PDO("mysql:host=$host;dbname=$database",$user,$pass);   
                
                
                
                $stmt = $conn->prepare("SELECT color FROM user WHERE u_id=2");
                $stmt->bindParam(':uid',$user_id,PDO::PARAM_STR);

                $stmt->execute();   
                
                
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $color_result = current($result);
                
                return $color_result;

            }

        color_settings_save();
        $color_load = color_settings_load();
?>