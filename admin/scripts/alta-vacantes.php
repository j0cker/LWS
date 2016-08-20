<?PHP
include '../../conexioni.php';
$id=$_POST["id"];
$id_cat=$_POST["id_cat"];
$nombreEmpresa=$_POST["nombreEmpresa"];
$nombreVacante=$_POST["nombreVacante"];
$imagen=$_POST["imagen"];
$direccionEmpresa=$_POST["direccionEmpresa"];
$estado=$_POST["estado"];
$descripcion=$_POST["descripcion"];
$requisitos=$_POST["requisitos"];
$latitud=$_POST["latitud"];
$longitud=$_POST["longitud"];
$actividades=$_POST["actividades"];
$incentivos=$_POST["incentivos"];
$prestaciones=$_POST["prestaciones"];
$remuneracion=$_POST["remuneracion"];
$tipoTiempo=$_POST["tipoTiempo"];
$contacto=$_POST["contacto"];
if($_POST["option"]==1){
  $query = $conn->query("INSERT INTO nuevasvacantes (nombreVacante,imagen,tipoTiempo,id_cat,nombreEmpresa,direccionEmpresa,estado,descripcion,requisitos,latitud,longitud,actividades,incentivos,prestaciones,remuneracion,contacto,fecha) VALUES ('".$nombreVacante."','".$imagen."','".$tipoTiempo."','".$id_cat."','".$nombreEmpresa."','".$direccionEmpresa."','".$estado."','".$descripcion."','".$requisitos."','".$latitud."','".$longitud."','".$actividades."','".$incentivos."','".$prestaciones."','".$remuneracion."','".$contacto."','".date('d-m-Y')."')") OR die("Error: ".mysqli_error($conn));
  if($query===true){
    echo 'Insertado';
  } else {
    echo 'No Insertado';
  }
} else {
  $query = $conn->query("DELETE FROM nuevasvacantes WHERE id='".$id."'");
  $query = $conn->query("INSERT INTO nuevasvacantes (nombreVacante,imagen,tipoTiempo,id_cat,nombreEmpresa,direccionEmpresa,estado,descripcion,requisitos,latitud,longitud,actividades,incentivos,prestaciones,remuneracion,contacto,fecha) VALUES ('".$nombreVacante."','".$imagen."','".$tipoTiempo."','".$id_cat."','".$nombreEmpresa."','".$direccionEmpresa."','".$estado."','".$descripcion."','".$requisitos."','".$latitud."','".$longitud."','".$actividades."','".$incentivos."','".$prestaciones."','".$remuneracion."','".$contacto."','".date('d-m-Y')."')") OR die("Error: ".mysqli_error($conn));
  if($query===true){
    echo 'Modificado';
  } else {
    echo 'No Modificado';
  }
}
?>