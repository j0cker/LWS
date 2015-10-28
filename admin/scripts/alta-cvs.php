<?PHP
include '../../conexioni.php';
$id=$_POST["id"];
$id_cat=$_POST["id_cat"];
$nombreCompleto=$_POST["nombreCompleto"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];
$estado=$_POST["estado"];
$oferta=$_POST["oferta"];
$tituloProfesional=$_POST["tituloProfesional"];
$gradoEstudios=$_POST["gradoEstudios"];
$diplomado=$_POST["diplomado"];
$habilidades=$_POST["habilidades"];
$competencias=$_POST["competencias"];
$ultimoEmpleador=$_POST["ultimoEmpleador"];
$tipoTiempo=$_POST["tipoTiempo"];
$ultimoEmpleo=$_POST["ultimoEmpleo"];
$datepicker=$_POST["datepicker"];
$datepicker2=$_POST["datepicker2"];
$trabajaActualmente=$_POST["trabajaActualmente"];
$descripcionAnteriores=$_POST["descripcionAnteriores"];
$vacante1=$_POST["vacante1"];
$vacante2=$_POST["vacante2"];
$vacante3=$_POST["vacante3"];
$vacante4=$_POST["vacante4"];
$vacante5=$_POST["vacante5"];
$vacante6=$_POST["vacante6"];
$comentarios=$_POST["comentarios"];
if($_POST["option"]==1){
  $query = $conn->query("INSERT INTO CVS (tipoTiempo,id_cat,nombreCompleto,telefono,email,estado,oferta,tituloProfesional,gradoEstudios,diplomado,habilidades,competencias,ultimoEmpleador,ultimoEmpleo,datepicker,datepicker2,trabajaActualmente,descripcionAnteriores,vacante1,vacante2,vacante3,vacante4,vacante5,vacante6,comentarios,fecha) VALUES ('".$tipoTiempo."','".$id_cat."','".$nombreCompleto."','".$telefono."','".$email."','".$estado."','".$oferta."','".$tituloProfesional."','".$gradoEstudios."','".$diplomado."','".$habilidades."','".$competencias."','".$ultimoEmpleador."','".$ultimoEmpleo."','".$datepicker."','".$datepicker2."','".$trabajaActualmente."','".$descripcionAnteriores."','".$vacante1."','".$vacante2."','".$vacante3."','".$vacante4."','".$vacante5."','".$vacante6."','".$comentarios."','".date('d-m-Y')."')") OR die("Error: ".mysqli_error($conn));
  if($query===true){
    echo 'Insertado';
  } else {
    echo 'No Insertado';
  }
} else {
  $query = $conn->query("DELETE FROM CVS WHERE id='".$id."'");
  $query = $conn->query("INSERT INTO CVS (tipoTiempo,id_cat,nombreCompleto,telefono,email,estado,oferta,tituloProfesional,gradoEstudios,diplomado,habilidades,competencias,ultimoEmpleador,ultimoEmpleo,datepicker,datepicker2,trabajaActualmente,descripcionAnteriores,vacante1,vacante2,vacante3,vacante4,vacante5,vacante6,comentarios,fecha) VALUES ('".$tipoTiempo."','".$id_cat."','".$nombreCompleto."','".$telefono."','".$email."','".$estado."','".$oferta."','".$tituloProfesional."','".$gradoEstudios."','".$diplomado."','".$habilidades."','".$competencias."','".$ultimoEmpleador."','".$ultimoEmpleo."','".$datepicker."','".$datepicker2."','".$trabajaActualmente."','".$descripcionAnteriores."','".$vacante1."','".$vacante2."','".$vacante3."','".$vacante4."','".$vacante5."','".$vacante6."','".$comentarios."','".date('d-m-Y')."')") OR die("Error: ".mysqli_error($conn));
  if($query===true){
    echo 'Modificado';
  } else {
    echo 'No Modificado';
  }
}
?>