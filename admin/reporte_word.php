<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=Reporte.doc");
include '../conexioni.php';
$query = $conn->query("SELECT * FROM cvs order by id DESC");
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
		<td colspan="6" bgcolor="skyblue"><CENTER><strong>REPORTE</strong></CENTER></td>
	</tr>
	<tr bgcolor="red">
		<td><strong>ID</strong></td>
		<td><strong>NOMBRE COMPLETO</strong></td>
		<td><strong>TELEFONO</strong></td>
		<td><strong>EMAIL</strong></td>
		<td><strong>ESTADO</strong></td>
		<td><strong>CATEGORIA</strong></td>
		<td><strong>Tipo de Tiempo</strong></td>
		<td><strong>PAIS</strong></td>
		<td><strong>EDAD</strong></td>
		<td><strong>DNI</strong></td>
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
			<td><?php echo $Pais; ?></td>
			<td><?php echo $edad; ?></td>
			<td><?php echo $dni; ?></td>                     
		</tr> 
		<?php
	}/*fin while*/
}/*fin if*/
  ?>
</table>
</body>
</html>