<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}
 ?>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link href="style.css" rel="stylesheet">



    <title>Startseite</title>
  </head>
  <a href="logout.php">Abmelden</a>
  <body img src="img/wall.jpg" alt="background">
    <h1>Startseite</h1>
    <br>
    <a href="eins.php"><img src="img/Hände.png" alt="Hier zur Kategorie 1"></a>
    <a href="zwei.php"><img src="img/HerzHand.jpg" alt="Hier zur Kategorie 2"></a>



    <a href="eins.php"><img src="img/Hände.png" alt="Hier zur Kategorie 1"></a>
    <a href="zwei.php"><img src="img/HerzHand.jpg" alt="Hier zur Kategorie 2"></a>
    <a href="eins.php"><img src="img/Hände.png" alt="Hier zur Kategorie 1"></a>
    <a href="zwei.php"><img src="img/HerzHand.jpg" alt="Hier zur Kategorie 2"></a>
    
  </body>
</html>