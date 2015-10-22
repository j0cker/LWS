<?PHP
include '../../conexioni.php';
$id_cat=$_POST["id_cat"];
$nombreEmpresa=$_POST["nombreEmpresa"];
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
$query = $conn->query("INSERT INTO nuevasvacantes (tipoTiempo,id_cat,nombreEmpresa,direccionEmpresa,estado,descripcion,requisitos,latitud,longitud,actividades,incentivos,prestaciones,remuneracion,contacto,fecha) VALUES ('".$tipoTiempo."','".$id_cat."','".$nombreEmpresa."','".$direccionEmpresa."','".$estado."','".$descripcion."','".$requisitos."','".$latitud."','".$longitud."','".$actividades."','".$incentivos."','".$prestaciones."','".$remuneracion."','".$contacto."','".date('d-m-Y')."')") OR die("Error: ".mysqli_error($conn));
if($query===true){
  echo 'Insertado';
} else {
  echo 'No Insertado';
}
?>