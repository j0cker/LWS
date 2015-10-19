<?PHP
include  '../../global.php';
include '../../conexioni.php';
$buscar = $_GET["buscar"];
$query = $conn->query("SELECT * FROM categorias WHERE nombreCategoria LIKE '%".$buscar."%'") OR die("Error: ".mysqli_error($conn));
if($query->num_rows>0){
  $c=0;
  $array_cat = array();
  $array_id = array();
  while($row = $query->fetch_assoc()){
    $array_cat[] = $row["nombreCategoria"]; 
	  $array_id[] = $row["id"]; 
	  $c++;
  }
  $obj = new stdclass();
  $obj->true = "true";
  $obj->cat = $array_cat;
  $obj->id = $array_id;
  echo json_encode($obj);
} else {
  $obj = new stdclass();
  $obj->true = "false";
  echo json_encode($obj);
}
?>