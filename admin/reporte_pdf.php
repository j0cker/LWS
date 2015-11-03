<?php
include '../conexioni.php';
require_once("../dompdf/dompdf_config.inc.php");
$id=$_GET["id"];
if($id){
  $query = $conn->query("SELECT * FROM cvs WHERE id='".$id."'");
} else {
  $query = $conn->query("SELECT * FROM cvs order by id DESC");	
}
if($query->num_rows>0){
	
	$codigoHTML = '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Reporte</title>
	</head>
	<body>
	<table width="100%" border="1" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="26" bgcolor="skyblue"><CENTER><strong>REPORTE</strong></CENTER></td>
	</tr>
	<tr bgcolor="red">
		<td><strong>ID</strong></td>
		<td><strong>NOMBRE COMPLETO</strong></td>
		<td><strong>TELEFONO</strong></td>
		<td><strong>EMAIL</strong></td>
		<td><strong>ESTADO</strong></td>
		<td><strong>CATEGORIA</strong></td>
		<td><strong>TIPO DE TIEMPO</strong></td>
		<td><strong>TITULO PROFESIONAL</strong></td>
		<td><strong>GRADO ESTUDIOS</strong></td>
		<td><strong>DIPLOMADO</strong></td>
		<td><strong>HABILIDADES</strong></td>
		<td><strong>COMPETENCIAS</strong></td>
		<td><strong>ULTIMO EMPLEADOR</strong></td>
		<td><strong>ULTIMO EMPLEO</strong></td>
		<td><strong>INICIO EMPLEO</strong></td>
		<td><strong>FIN EMPLEO</strong></td>
		<td><strong>TRABAJA ACTUALMENTE</strong></td>
		<td><strong>DESCRIPCION</strong></td>
		<td><strong>VACANTE 1</strong></td>
		<td><strong>VACANTE 2</strong></td>
		<td><strong>VACANTE 3</strong></td>
		<td><strong>VACANTE 4</strong></td>
		<td><strong>VACANTE 5</strong></td>
		<td><strong>VACANTE 6</strong></td>
		<td><strong>COMENTARIOS</strong></td>
		<td><strong>FECHA</strong></td>
	</tr>';
		
	while($row=$query->fetch_assoc()){				
		$query2 = $conn->query("SELECT nombreCategoria FROM categorias WHERE id='".$row["id_cat"]."'") OR die("Error: ".mysqli_error($conn));
		if($query2->num_rows>0){
		$row2 = $query2->fetch_assoc();
		  $categoria = ''.utf8_decode($row2['nombreCategoria']).'';
		} else {
		  $categoria = 'ERROR Contacte al Admin';
		}
		$codigoHTML = ''.$codigoHTML .' 
		<tr>
			<td>'.$row["id"].'</td>
			<td>'.$row["nombreCompleto"].'</td>
			<td>'.$row["telefono"].'</td>
			<td>'.$row["email"].'</td>
			<td>'.$row["estado"].'</td>
			<td>'.$categoria.'</td>
			<td>'.$row["tipoTiempo"].'</td>
			<td>'.$row["tituloProfesional"].'</td>
			<td>'.$row["gradoEstudios"].'</td>
			<td>'.$row["diplomado"].'</td>  
			<td>'.$row["habilidades"].'</td>    
			<td>'.$row["competencias"].'</td> 
			<td>'.$row["ultimoEmpleador"].'</td> 
			<td>'.$row["ultimoEmpleo"].'</td> 
			<td>'.$row["datePicker"].'</td> 
			<td>'.$row["datePicker2"].'</td>';
			if($row["trabajaActualmente"]=="on"){
		      $codigoHTML = ''.$codigoHTML .'<td>SI</td>'; 
			} else {
			  $codigoHTML = ''.$codigoHTML .'<td>NO</td>'; 	
			}
			$codigoHTML = ''.$codigoHTML .'
			<td>'.$row["descripcionAnteriores"].'</td> 
			<td>'.$row["vacante1"].'</td> 
			<td>'.$row["vacante2"].'</td>
			<td>'.$row["vacante3"].'</td> 
			<td>'.$row["vacante4"].'</td> 
			<td>'.$row["vacante5"].'</td> 
			<td>'.$row["vacante6"].'</td> 
			<td>'.$row["comentarios"].'</td> 
			<td>'.$row["fecha"].'</td>               
		</tr>';
	}/*fin while*/
}/*fin if*/
$codigoHTML = ''.$codigoHTML.'
</table>
</body>
</html>';
$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte_tabla_usuarios.pdf");
?>