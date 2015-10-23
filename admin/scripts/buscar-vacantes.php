<?PHP
include  '../../global.php';
include '../../conexioni.php';
$buscar = $_GET["buscar"];
$query = $conn->query("SELECT * FROM nuevasVacantes WHERE nombreEmpresa LIKE '%".$buscar."%' OR estado LIKE '%".$buscar."%' OR tipoTiempo LIKE '%".$buscar."%' OR fecha LIKE '%".$buscar."%'") OR die("Error: ".mysqli_error($conn));
if($query->num_rows>0){
  $c=0;
  $array_id = array();
  $categoria = array();
  $nombreEmpresa = array();
  $estado = array();
  $tipoTiempo = array();
  $fecha = array();
  while($row = $query->fetch_assoc()){ 
	  $array_id[] = $row["id"]; 
    $query2 = $conn->query("SELECT nombreCategoria FROM categorias WHERE id='".$row["id_cat"]."'") OR die("Error: ".mysqli_error($conn));
    if($query2->num_rows>0){
      $row2 = $query2->fetch_assoc();
      $categoria[] = ''.utf8_decode($row2['nombreCategoria']).'';
    } else {
      $categoria[] = 'ERROR Contacte al Admin';
    }
    $nombreEmpresa[] = utf8_decode($row["nombreEmpresa"]); 
	  $estado[] = utf8_decode($row["estado"]);
    $tipoTiempo[] = utf8_decode($row["tipoTiempo"]);  
    $fecha[] = $row["fecha"];  
	  $c++;
  }
  $obj = new stdclass();
  $obj->true = "true";
  $obj->id = $array_id;
  $obj->categoria = $categoria;
  $obj->nombreEmpresa = $nombreEmpresa;
  $obj->estado = $estado;
  $obj->tipoTiempo = $tipoTiempo;
  $obj->fecha = $fecha;
  echo json_encode($obj);
} else {
  $obj = new stdclass();
  $obj->true = "false";
  echo json_encode($obj);
}
?>