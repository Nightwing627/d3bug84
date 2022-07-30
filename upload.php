<?php
if(isset($_POST['foto'])){
move_uploaded_file($_FILES['foto']['tmp_name'], "upload/".$_FILES['foto']['name']);
}
else{
echo'Es wurde keine Datei ausgewählt!';
}
?>