<?PHP
include '../../conexioni.php';
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
$contacto=$_POST["contacto"];
$query = $conn->query("INSERT INTO nuevasvacantes (nombreEmpresa,direccionEmpresa,estado,descripcion,requisitos,latitud,longitud,actividades,incentivos,prestaciones,remuneracion,contacto) VALUES ('".$nombreEmpresa."','".$direccionEmpresa."','".$estado."','".$descripcion."','".$requisitos."','".$latitud."','".$longitud."','".$actividades."','".$incentivos."','".$prestaciones."','".$remuneracion."','".$contacto."')") OR die("Error: ".mysqli_error($conn));
if($query===true){
  echo 'Insertado';
} else {
  echo 'No Insertado';
}
?>