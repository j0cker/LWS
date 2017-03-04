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

  $query = $conn->query("UPDATE nuevasvacantes SET nombreVacante='".$nombreVacante."', imagen='".$imagen."', tipoTiempo='".$tipoTiempo."', id_cat='".$id_cat."', nombreEmpresa='".$nombreEmpresa."', direccionEmpresa='".$direccionEmpresa."', estado='".$estado."', descripcion='".$descripcion."', requisitos='".$requisitos."', latitud='".$latitud."', longitud='".$longitud."', actividades='".$actividades."', incentivos='".$incentivos."', prestaciones='".$prestaciones."', remuneracion='".$remuneracion."', contacto='".$contacto."', fecha='".date('d-m-Y')."' WHERE id='".$id."'") OR die("Error: ".mysqli_error($conn));

  if($query===true){
    echo 'Modificado';
  } else {
    echo 'No Modificado';
  }
}
?>