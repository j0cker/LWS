<?PHP
include '../../conexioni.php';
$id=$_POST["id"];
$query = $conn->query("DELETE FROM nuevasVacantes WHERE id='".$id."'") OR die("Error: ".mysqli_error($conn));
if($query===true){
  $obj =  new stdclass();
  $obj->true = "true";
  echo json_encode($obj);
} else {
  $obj->true = "false";
  echo json_encode($obj);
}
?>