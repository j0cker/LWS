<?PHP
include  '../../global.php';
include '../../conexioni.php';
$tipoTiempo1 = $_GET["tipoTiempo1"];
$tipoTiempo2 = $_GET["tipoTiempo2"];
$tipoTiempo3 = $_GET["tipoTiempo3"];
$tipoTiempo4 = $_GET["tipoTiempo4"];
$tipoTiempo5 = $_GET["tipoTiempo5"];
$tipoTiempo6 = $_GET["tipoTiempo6"];
$categorias123 = $_GET["categorias123"];
$estados123 = $_GET["estados123"];
$buscar = $_GET["texto123"];
if($categorias123=="Todas" && $estados123=="Todas")
  $query = $conn->query("SELECT nv.*, cat.nombreCategoria FROM nuevasvacantes as nv INNER JOIN categorias as cat ON nv.id_cat=cat.id WHERE (nv.id LIKE '%".$buscar."%' OR nv.nombreEmpresa LIKE '%".$buscar."%' OR nv.estado LIKE '%".$buscar."%' OR nv.tipoTiempo LIKE '%".$buscar."%' OR nv.fecha LIKE '%".$buscar."%' OR cat.nombreCategoria LIKE '%".$buscar."%') AND ((nv.tipoTiempo='Freelance' AND 'true'='".$tipoTiempo1."') OR (nv.tipoTiempo='Internado' AND 'true'='".$tipoTiempo2."') OR (nv.tipoTiempo='Medio Tiempo' AND 'true'='".$tipoTiempo3."') OR (nv.tipoTiempo='Rol de Turnos' AND 'true'='".$tipoTiempo4."') OR (nv.tipoTiempo='Temporal' AND 'true'='".$tipoTiempo5."') OR (nv.tipoTiempo='Tiempo Completo' AND 'true'='".$tipoTiempo6."'))") OR die("Error: ".mysqli_error($conn));
if($categorias123=="Todas" && $estados123!="Todas"){
  $query = $conn->query("SELECT nv.*, cat.nombreCategoria FROM nuevasvacantes as nv INNER JOIN categorias as cat ON nv.id_cat=cat.id WHERE (nv.id LIKE '%".$buscar."%' OR nv.nombreEmpresa LIKE '%".$buscar."%' OR nv.estado LIKE '%".$buscar."%' OR nv.tipoTiempo LIKE '%".$buscar."%' OR nv.fecha LIKE '%".$buscar."%' OR cat.nombreCategoria LIKE '%".$buscar."%') AND nv.estado='".$estados123."' AND ((nv.tipoTiempo='Freelance' AND 'true'='".$tipoTiempo1."') OR (nv.tipoTiempo='Internado' AND 'true'='".$tipoTiempo2."') OR (nv.tipoTiempo='Medio Tiempo' AND 'true'='".$tipoTiempo3."') OR (nv.tipoTiempo='Rol de Turnos' AND 'true'='".$tipoTiempo4."') OR (nv.tipoTiempo='Temporal' AND 'true'='".$tipoTiempo5."') OR (nv.tipoTiempo='Tiempo Completo' AND 'true'='".$tipoTiempo6."'))") OR die("Error: ".mysqli_error($conn));
}
if($categorias123!="Todas" && $estados123=="Todas"){
  $query = $conn->query("SELECT nv.*, cat.nombreCategoria FROM nuevasvacantes as nv INNER JOIN categorias as cat ON nv.id_cat=cat.id WHERE (nv.id LIKE '%".$buscar."%' OR nv.nombreEmpresa LIKE '%".$buscar."%' OR nv.estado LIKE '%".$buscar."%' OR nv.tipoTiempo LIKE '%".$buscar."%' OR nv.fecha LIKE '%".$buscar."%' OR cat.nombreCategoria LIKE '%".$buscar."%') AND cat.nombreCategoria='".$categorias123."' AND ((nv.tipoTiempo='Freelance' AND 'true'='".$tipoTiempo1."') OR (nv.tipoTiempo='Internado' AND 'true'='".$tipoTiempo2."') OR (nv.tipoTiempo='Medio Tiempo' AND 'true'='".$tipoTiempo3."') OR (nv.tipoTiempo='Rol de Turnos' AND 'true'='".$tipoTiempo4."') OR (nv.tipoTiempo='Temporal' AND 'true'='".$tipoTiempo5."') OR (nv.tipoTiempo='Tiempo Completo' AND 'true'='".$tipoTiempo6."'))") OR die("Error: ".mysqli_error($conn));
}
if($categorias123!="Todas" && $estados123!="Todas")
 $query = $conn->query("SELECT nv.*, cat.nombreCategoria FROM nuevasvacantes as nv INNER JOIN categorias as cat ON nv.id_cat=cat.id WHERE (nv.id LIKE '%".$buscar."%' OR nv.nombreEmpresa LIKE '%".$buscar."%' OR nv.estado LIKE '%".$buscar."%' OR nv.tipoTiempo LIKE '%".$buscar."%' OR nv.fecha LIKE '%".$buscar."%' OR cat.nombreCategoria LIKE '%".$buscar."%') AND nv.estado='".$estados123."' AND cat.nombreCategoria='".$categorias123."' AND ((nv.tipoTiempo='Freelance' AND 'true'='".$tipoTiempo1."') OR (nv.tipoTiempo='Internado' AND 'true'='".$tipoTiempo2."') OR (nv.tipoTiempo='Medio Tiempo' AND 'true'='".$tipoTiempo3."') OR (nv.tipoTiempo='Rol de Turnos' AND 'true'='".$tipoTiempo4."') OR (nv.tipoTiempo='Temporal' AND 'true'='".$tipoTiempo5."') OR (nv.tipoTiempo='Tiempo Completo' AND 'true'='".$tipoTiempo6."'))") OR die("Error: ".mysqli_error($conn));
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
      $categoria[] = ''.$row2['nombreCategoria'].'';
    } else {
      $categoria[] = 'ERROR Contacte al Admin';
    }
    $nombreEmpresa[] = $row["nombreEmpresa"]; 
	  $estado[] = $row["estado"];
    $tipoTiempo[] = $row["tipoTiempo"];  
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