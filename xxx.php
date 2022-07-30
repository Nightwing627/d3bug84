<?


$x=move_uploaded_file($_FILES['foto']['tmp_name'], "upload/upload".$_FILES['foto']['name']);
var_dump ($x);
?>



if(isset($_POST['foto'])){
