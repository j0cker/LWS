<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Personal_usuarios.xls");
include '../conexioni.php';
$id=$_GET["id"];
if($id){
  $query = $conn->query("SELECT * FROM cvs WHERE id='".$id."'");
} else {
  $query = $conn->query("SELECT * FROM cvs order by id DESC");	
}
if($query->num_rows>0){
	?>
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
	</tr>
	<?PHP
		
	while($row=$query->fetch_assoc()){				
		$query2 = $conn->query("SELECT nombreCategoria FROM categorias WHERE id='".$row["id_cat"]."'") OR die("Error: ".mysqli_error($conn));
		if($query2->num_rows>0){
		$row2 = $query2->fetch_assoc();
		  $categoria = ''.utf8_decode($row2['nombreCategoria']).'';
		} else {
		  $categoria = 'ERROR Contacte al Admin';
		}
		?>  
		<tr>
			<td><?php echo $row["id"]; ?></td>
			<td><?php echo $row["nombreCompleto"]; ?></td>
			<td><?php echo $row["telefono"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["estado"]; ?></td>
			<td><?php echo $categoria; ?></td>
			<td><?php echo $row["tipoTiempo"]; ?></td>
			<td><?php echo $row["tituloProfesional"]; ?></td>
			<td><?php echo $row["gradoEstudios"]; ?></td>
			<td><?php echo $row["diplomado"]; ?></td>  
			<td><?php echo $row["habilidades"]; ?></td>    
			<td><?php echo $row["competencias"]; ?></td> 
			<td><?php echo $row["ultimoEmpleador"]; ?></td> 
			<td><?php echo $row["ultimoEmpleo"]; ?></td> 
			<td><?php echo $row["datePicker"]; ?></td> 
			<td><?php echo $row["datePicker2"]; ?></td> 
			<td><?php echo ($row["trabajaActualmente"]=="on")? 'SI' : 'NO' ; ?></td> 
			<td><?php echo $row["descripcionAnteriores"]; ?></td> 
			<td><?php echo $row["vacante1"]; ?></td> 
			<td><?php echo $row["vacante2"]; ?></td>
			<td><?php echo $row["vacante3"]; ?></td> 
			<td><?php echo $row["vacante4"]; ?></td> 
			<td><?php echo $row["vacante5"]; ?></td> 
			<td><?php echo $row["vacante6"]; ?></td> 
			<td><?php echo $row["comentarios"]; ?></td> 
			<td><?php echo $row["fecha"]; ?></td>               
		</tr> 
		<?php
	}/*fin while*/
}/*fin if*/
  ?>
</table>
</body>
</html>