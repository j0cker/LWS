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
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Reporte</title>
	</head>
	<body>
	<table width="100%" border="0">
	  <tr>
        <td align="center">PDF ALTAS CVS</td>
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
          <td>Identificador: '.$row["id"].'</td>
        </tr>
        <tr>
          <td>Fecha: '.$row["fecha"].'</td>
        </tr>
        <tr> 
          <td>'.utf8_encode("Categoría").': '.$categoria.'</td>
        </tr>
        <tr>
          <td>Tipo de empleo: '.$row["tipoTiempo"].'</td>
        </tr>
        <tr>
          <td>DATOS GENERALES</td>
        </tr>
        <tr>
          <td>----------------------------------------------------</td>
        </tr>
        <tr>
          <td>'.$row["nombreCompleto"].'</td>
        </tr>
        <tr>
          <td>Tel: '.$row["telefono"].'</td>
        </tr>
        <tr>
          <td>Email: '.$row["email"].'</td>
        </tr>
        <tr>
          <td>Estado: '.$row["estado"].'</td>
        </tr>
        <tr>
          <td>----------------------------------------------------</td>
        </tr>
        <tr>
          <td><br />VACANTE</td>
        </tr>
        <tr>
          <td>Oferta laboral: '.$row["oferta"].'</td>
        </tr>
        <tr>
          <td>----------------------------------------------------</td>
        </tr>
        <tr>
          <td>EXPERIENCIA LABORAL / SOBRE EL CANDIDATO</td>
        </tr>
        <tr>
          <td>'.utf8_encode("Título").' profesional y/o '.utf8_encode("Profesión").': '.$row["tituloProfesional"].'</td>
        </tr>
        <tr>
          <td>'.utf8_encode("Último").' grado de estudios: '.$row["gradoEstudios"].'</td>
        </tr>
        <tr>
          <td>'.utf8_encode("Algún").' otro curso y/o Diplomado: '.$row["diplomado"].'</td>
        </tr>
        <tr>
          <td>Habilidades del candidato: '.$row["habilidades"].'</td>
        </tr>
        <tr>
          <td>Competencias laborales del candidato: '.$row["competencias"].'</td>
        </tr>
        <tr>
          <td>----------------------------------------------------</td>
        </tr>
        <tr>
          <td>EXPERIENCIA LABORAL / SOBRE EL '.utf8_encode("ÚLTIMO").' EMPLEO</td>
        </tr>
        <tr>
          <td>'.utf8_encode("Último").' Empleador: '.$row["ultimoEmpleador"].'</td>
        </tr>
        <tr>
          <td>'.utf8_encode("Ubicación").' del '.utf8_encode("último").' empleo: '.$row["ultimoEmpleo"].'</td>
        </tr>
        <tr>
          <td>Desde: '.$row["datePicker"].'</td>
        </tr>
        <tr>
          <td>Hasta: '.$row["datePicker2"].'</td>
        </tr>
        <tr>
          <td>'.utf8_encode("¿").'Actualmente trabaja '.utf8_encode("ahí?").':';
          if($row["trabajaActualmente"]=="on"){
		      $codigoHTML = ''.$codigoHTML .' SI'; 
	      } else {
			  $codigoHTML = ''.$codigoHTML .' NO'; 	
	      }
          $codigoHTML = ''.$codigoHTML .'
          </td>
        </tr>
        <tr>
          <td>Escribe una breve '.utf8_encode("descripción").' de las actividades que realizaban en su trabajo anterior y/o actual: '.$row["descripcionAnteriores"].'</td>
        </tr>
        <tr>
          <td>No. clave de la vacante para la que aplica:</td>
        </tr>
        <tr>
          <td>'.$row["vacante1"].'</td>
        </tr>
        <tr>
          <td>'.$row["vacante2"].'</td>
        </tr>
        <tr>
          <td>'.$row["vacante3"].'</td>
        </tr>
        <tr>
          <td>'.$row["vacante4"].'</td>
        </tr>
        <tr>
          <td>'.$row["vacante5"].'</td>
        </tr>
        <tr>
          <td>'.$row["vacante6"].'</td>
        </tr>
        <tr>
          <td>----------------------------------------------------</td>
        </tr>
		<tr>
	      <td>Otros comentarios y/o notas del reclutador (Si considera necesario agregar comentarios y/o notas al reclutador)'.$row["comentarios"].'</td>       
		</tr>';
	}/*fin while*/
}/*fin if*/
$codigoHTML = ''.$codigoHTML.'
    </table>
  </body>
</html>';
$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte_tabla_usuarios.pdf");
?>