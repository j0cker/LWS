<?PHP
include '../../global.php';
include '../../conexioni.php';
$query = $conn->query("SELECT * FROM cvs WHERE fecha like '%".date('m-Y')."%'") OR die("Error: ".mysqli_error($conn));
if($query->num_rows>0){
  $obj =  new stdclass();
  $obj->true = "true";
  $obj->TContCat = $query->num_rows;
  $obj->cont = 1;
  for($c=10; $c<$query->num_rows+10; $c++){
    if($query->num_rows>=$c-9 && $query->num_rows<=$c && $c!=10)
      $obj->cont = $c/10;
  }
  echo json_encode($obj);
} else {
  $obj->true = "true";
    $obj->TContCat = 0;
  echo json_encode($obj);
}
?>