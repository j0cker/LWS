<?PHP
include  '../../global.php';
include '../../conexioni.php';
$hoja=$_GET["hoja"];
$hoja = $hoja * $contHojas;
$query = $conn->query("SELECT * FROM users ORDER by id DESC LIMIT ".($hoja-$contHojas).",".$hoja."") OR die("Error: ".mysqli_error($conn));
if($query->num_rows>0){
  $c=0;
  $array_id = array();
  $user = array();
  $priv = array();
  $status = array();
  $fecha = array();
  while($row = $query->fetch_assoc()){
	  $array_id[] = $row["id"]; 
	  $user[] = $row["user"]; 
	  $priv[] = $row["priv"];
    $status[] = $row["status"];  
    $fecha[] = $row["fecha"];  
	  $c++;
  }
  $obj = new stdclass();
  $obj->true = "true";
  $obj->id = $array_id;
  $obj->user = $user;
  $obj->priv = $priv;
  $obj->status = $status;
  $obj->fecha = $fecha;
  echo json_encode($obj);
} else {
  $obj = new stdclass();
  $obj->true = "false";
  echo json_encode($obj);
}
?>