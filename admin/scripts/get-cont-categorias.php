<?PHP
include '../../conexioni.php';
$query = $conn->query("SELECT * FROM categorias") OR die("Error: ".mysqli_error($conn));
if($query->num_rows>0){
  $obj =  new stdclass();
  $obj->true = "true";
  $obj->cont = $query->num_rows;
  echo json_encode($obj);
} else {
  $obj->true = "false";
  echo json_encode($obj);
}
?>