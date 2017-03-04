<?PHP
include  '../../global.php';
include '../../conexioni.php';
$id=$_GET["id"];
$query = $conn->query("SELECT nv.*, cat.nombreCategoria FROM nuevasvacantes as nv INNER JOIN categorias as cat ON nv.id_cat=cat.id WHERE nv.id='".$id."'") OR die("Error: ".mysqli_error($conn));
if($query->num_rows>0){
  $row = $query->fetch_assoc();
  $obj = new stdclass();
  $obj->true = "true";
  $obj->id = $row["id"];
  $obj->imagen = $row["imagen"];
  $obj->categoria = $row["nombreCategoria"];
  $obj->nombreEmpresa = $row["nombreEmpresa"];
  $obj->direccionEmpresa = $row["direccionEmpresa"];
  $obj->latitud = $row["latitud"];
  $obj->longitud = $row["longitud"];
  $obj->urlMaps = "https://www.google.com.mx/maps/@".$row["latitud"].",".$row["longitud"].",15z";
  $obj->descripcion = $row["descripcion"];
  $obj->requisitos = $row["requisitos"];
  $obj->actividades = $row["actividades"];
  $obj->incentivos = $row["incentivos"];
  $obj->prestaciones = $row["prestaciones"];
  $obj->remuneracion = $row["remuneracion"];
  $obj->contacto = $row["contacto"];
  $obj->estado = $row["estado"];
  $obj->tipoTiempo = $row["tipoTiempo"];
  $obj->fecha = $row["fecha"];
  echo json_encode($obj);
} else {
  $obj = new stdclass();
  $obj->true = "false";
  echo json_encode($obj);
}
?>