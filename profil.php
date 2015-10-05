<?php 

include 'php/settings.php'; 

/*if(empty($color_result))
    echo "test";*/

echo '

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Ihr Profil</title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="css/profil.css">
</head>
<body>
    <nav class="w3-topnav w3-'.$color_load.'"" style="position:fixed; width:100%;">
        <b>Pschh</b>
        <a href="#profil">Ihr Profil</a>
        <a href="#">Nachrichten</a>
        <a href="#">Neuigkeiten</a>
        <a href="#">Freunde</a>
        <a href="#">Listen</a>
        <a href="#settings">Einstellungen</a>
        <a href="index.html">Logout</a>
    </nav>
    
    
    
    
    
    
    <div id="profil" class="w3-modal">
        
        <div class="w3-modal-dialog">
            <div class="w3-modal-content w3-card-4">
            
            <header class="w3-container w3-'.$color_load.'""> 
                <a href="#" class="w3-closebtn">&times;</a>
                <h2>Profil</h2>
            </header>
            
            <div class="w3-container">
                <p>Profilbild ';
                    include 'php/profil_daten.php';
                    echo    '<form action="php/img_insert.php" enctype="multipart/form-data">
                                <input type="hidden" name="pathname">
                                <input type="file" name="file">
                                <input type="submit" value="Hochladen">
                                <input type="text" value="'; echo $rows[0]; echo $pfad; echo'" name="uid">
                            </form>';
                echo '</p>
                <p>Vorname: ';
                    include 'php/profil_daten.php';
                    echo $rows[2];
                echo '</p>
                <p>Nachname: ';
                    include 'php/profil_daten.php';
                    echo $rows[3];
                echo '</p>
                <p>E-Mail: ';
                    include 'php/profil_daten.php';
                    echo $rows[1];
                echo '</p>
                <p>Geboren: ';
                    include 'php/profil_daten.php';
                    echo "dd.mm.yy (noch in entwicklung)<br>";
                echo '</p>
            </div>
      
            <footer class="w3-container w3-'.$color_load.'"">
                <p></p>
            </footer>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    <div id="settings" class="w3-modal"">
        
        <div class="w3-modal-dialog">
            <div class="w3-modal-content w3-card-4">
            
            <header class="w3-container w3-'.$color_load.'""> 
                <a href="#" class="w3-closebtn">&times;</a>
                <h2>Einstellungen</h2>
            </header>
            
            <nav class="w3-sidenav" style="position:relative;">
                <a href="#">Allgemeins</a>
                <a href="#">Layout</a>
                <a href="#">Datenschutz</a>
                <a href="#">Sicherheit</a>
                <a href="#">Konto</a>
            </nav>
            <div class="w3-container" style="height:600px;padding-left:25%;">
                <form action="php/settings.php">
                    <p>Farbe:</p>
                    <fieldset>
                        <input type="radio" id="red" name="farbe" value="red"><label for="red"> Rot</label><br> 
                        <input type="radio" id="green" name="farbe" value="green"><label for="green"> Grün</label><br> 
                        <input type="radio" id="blue" name="farbe" value="blue"><label for="blue"> Blau</label><br> 
                        <input type="radio" id="lime" name="farbe" value="lime"><label for="lime"> Lime</label><br> 
                        <input type="hidden" value="'; echo $rows[0]; echo $pfad; echo'" name="uid">
                    </fieldset>
            </div>
      
            <footer class="w3-container w3-'.$color_load.'" style="position:relative;z-index:5;">
                    <input class="w3-btn w3-'.$color_load.'"" type="submit" value="Speichern">
                </form> 
            </footer>
            </div>
        </div>
    </div>
    
    
    <header class="w3-container w3-'.$color_load.'"">
        <br><br><br><br><br><br><br><br><br><br><br><h4>';
            include 'php/profil_daten.php';
            echo $rows[2] . " " . $rows[3]; 
        echo'</h4>
    </header>
    
    <div class="pic w3-card-12">
        
    </div>
    
    <div class="w3-container">
        <form action="php/profil_inhalt.php" method="$_REQUEST">
            <textarea style="resize:none; height:100px; width:500px;" name="post" placeholder="Posten..."/></textarea><br>
            <input class="w3-btn w3-'.$color_load.'"" type="submit" value="Posten">
        </form>
        <br><br><br>'; 
            include 'php/profil_postload.php';
            echo '     
    </div>
</body>
</html>

';

?>