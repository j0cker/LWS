<?PHP
include  '../../global.php';
include '../../conexioni.php';
$id=$_GET["id"];
$query = $conn->query("SELECT * FROM users WHERE id='".$id."'") OR die("Error: ".mysqli_error($conn));
if($query->num_rows>0){
  $c=0;
  while($row = $query->fetch_assoc()){
	  $array_id = $row["id"]; 
	  $user = $row["user"]; 
	  $priv = $row["priv"];
    $status = $row["status"];  
    $fecha = $row["fecha"];  
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