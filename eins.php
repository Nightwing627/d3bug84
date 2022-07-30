<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kategorie 1</title>
  </head>
  <a href="logout.php">Abmelden</a>
  <body>
    <h1>Kategorie 1</h1>
    <br>
    <form action="eins.php" method="post"  enctype="multipart/form-data">
      <input type="file" name="foto" value="4194304"><br>
      <input type="submit" value="Hochladen">
    </form>
    <br>
    <textarea cols="20" rows="10">Textbereich!</textarea>
    </body>
</html>

    <?php

      session_start();
      if(!isset($_SESSION["username"])){
      header("Location: index.php");
      exit;
      }
      
      if(isset($_POST['foto'])){
        move_uploaded_file($_FILES['foto']['tmp_name'], "upload/".$_FILES['foto']['name']);
      }
      else{
        echo'Es wurde keine Datei ausgewählt!';
    }
    ?>



