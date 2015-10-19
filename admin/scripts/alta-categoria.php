<?PHP
include '../../conexioni.php';
$categoria=$_POST["categoria"];
$option=$_POST["option"];
$id=$_POST["id"];
if($option==1){
  $query = $conn->query("INSERT INTO categorias (nombreCategoria) VALUES ('".$categoria."')") OR die("Error: ".mysqli_error($conn));
} else {
  $query = $conn->query("UPDATE categorias SET nombreCategoria='".$categoria."' WHERE id='".$id."'") OR die("Error: ".mysqli_error($conn));
}
if($query===true){
  echo 'Insertado';
} else {
  echo 'No Insertado';
}
?>