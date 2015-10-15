<?PHP
include '../../conexioni.php';
$categoria=$_POST["categoria"];
$query = $conn->query("INSERT INTO categorias (nombreCategoria) VALUES ('".$categoria."')") OR die("Error: ".mysqli_error($conn));
if($query===true){
  echo 'Insertado';
} else {
  echo 'No Insertado';
}
?>