<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kategorie 2</title>
    </head>
  <a href="logout.php">Abmelden</a>
  <body>
    <h1>Kategorie 2</h1>
    <br>
    <form action="zwei.php" method="post"  enctype="multipart/form-data">
      <input type="file" name="foto" value="4194304"><br>
      <input type="submit" value="Hochladen">
    </form>
  </body>
</html>


<?php


if(1){
  $x=move_uploaded_file($_FILES['foto']['tmp_name'], "upload/upload".$_FILES['foto']['name']);
 }
  else{
  echo'Es wurde keine Datei ausgewählt!';
  }

session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}
 ?>
