<?PHP 
require_once('session.php');
require_once('../conexioni.php');
if($status=="OK"){
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<?PHP
require_once('desktop/header.php');
?>
<script>
  var comilla = "'";
$( document ).ready(function() {
    getCategorias();
});
function changeFunc(){
  var selectBox = document.getElementById("cats");
  var selectedValue = selectBox.options[selectBox.selectedIndex].value;
  if(selectedValue=="Crear Nueva Categoría"){
    window.location = "categorias.php";
  }
}
function getCategorias(){
	$.ajax({url:   "scripts/get-categoriasTodas.php",
			type:  'GET',
			success:  function (response) {
		      obj = JSON.parse(response);
			  if(obj.true=="true"){
				  var html = '';
					  for(var x=0; x<obj.cat.length; x++){
						  html+='<option value="'+obj.id[x]+'">'+obj.cat[x]+'</option>';
					  }
            html+='<option value="Crear Nueva Categoría">Crear Nueva Categoría</option>';
					$("#cats").html($("#cats").html() + html);
			  } else {
				$("#cats").html('ERROR');
			  }
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
}
function altaVacante(option, id){
  if(!$("#nombreEmpresa").val()){
    alert("Llenar Nombre de la empresa");
  } else if(!$("#direccionEmpresa").val()){
	alert("Llenar Dirección de la empresa");
  } else if(!$("#estado").val()){
	alert("Seleccionar Estado");
  } else if(!$("#descripcion").val()){
	alert("Llenar Descripción");
  } else if(!$("#nombreVacante").val()){
	alert("Llenar Nombre de la Vacante");
  } else if(!$("#requisitos").val()){
	alert("Llenar Requisitos");
  } else if(!$("#actividades").val()){
	alert("Llenar Actividades");
  } /*else if(!$("#incentivos").val()){
	alert("Llenar Incentivos");
  } */else if(!$("#prestaciones").val()){
	alert("Llenar prestaciones");
  } else if(!$("#remuneracion").val()){
	alert("Llenar Remuneración");
  } else if(!$("#contacto").val()){
	alert("Llenar Contacto");
  } else if(!$("#imagen").val()){
	alert("Agrega una imágen a a vacante");
  } else {
	console.log($("#latitud").val() + " " + $("#longitud").val());
	$.ajax({      data: { nombreEmpresa:$("#nombreEmpresa").val(),
	                      direccionEmpresa:$("#direccionEmpresa").val(),
              tipoTiempo:$("#tipoTiempo").val(),
              id_cat:$("#cats").val(),
						  estado:$("#estado").val(),
						  descripcion:$("#descripcion").val(),
						  requisitos:$("#requisitos").val(),
						  latitud:$("#latitud").val(),
						  longitud:$("#longitud").val(),
						  actividades:$("#actividades").val(),
						  //incentivos:$("#incentivos").val(),
              nombreVacante:$("#nombreVacante").val(),
						  prestaciones:$("#prestaciones").val(),
						  remuneracion:$("#remuneracion").val(),
						  contacto:$("#contacto").val(),
              imagen:$("#imagen").val(),
              option:option,
              id:id },
					url:   "scripts/alta-vacantes.php",
			type:  'POST',
			success:  function (response) {
			  alert("Vacante Agregada");
        window.location = "index.php";
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
  }
}
</script>
</head>
<body>
<?PHP
require_once('desktop/menu.php');
if($_GET["id"]){
  $id=$_GET["id"];
  $query = $conn->query("SELECT * FROM nuevasvacantes WHERE id='".$id."'") OR die("Error: ".mysqli_error($conn));
  if($query->num_rows>0){
    $row=$query->fetch_assoc(); 
    $query2 = $conn->query("SELECT nombreCategoria FROM categorias WHERE id='".$row["id_cat"]."'") OR die("Error: ".mysqli_error($conn));
    if($query2->num_rows>0){
      $row2 = $query2->fetch_assoc();
      $categoria = ''.utf8_decode($row2['nombreCategoria']).'';
    } else {
      $categoria = 'ERROR Contacte al Admin';
    }
  } else {
    $row = '';
  }
}
?>
  <main class="mdl-layout__content">
    <div class="row">
        <div class="col-md-12 text-center page-content">
            <div style="min-height: 35px;" class="col-md-12 mdl-shadow--2dp">
                <a style="color: #AD1457; font-weight: bold;" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  <span style="font-size: 15px;" class="fa fa-building-o"></span> Altas de Vacantes
                </a>
            </div>
        </div>
    </div>
    
    <div style="margin-top: 20px;" class="row text-center">
      <div class="col-md-1"></div>
      <div style="background-color: #AD1457; color: white;" class="col-md-10 panel">
      <!-- Default panel contents -->
      <div class="panel-heading">
        <a href="index.php" style="color: white; text-decoration: none; text-align: center;">
          <span style="color: white; text-decoration: none; font-size: 20px; padding-right: 10px; float: left;" class="fa fa-chevron-left">Atrás</span>
          <span style="text-decoration: none; text-align: right; font-size: 20px; padding-right: 10px; color: white;" class="fa fa-plus"></span> Nueva Vacante
          <span style="font-size: 20px; padding-right: 10px; float: right; color: white;" class="fa fa-chevron-left">Atrás</span>
        </a>
      </div>
      <div style="color: black; background-color: #FFF;" class="panel-body text-left">
        <form role="form">
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-briefcase"></span>
                </div>
                <div class="col-md-1">
                  <p style="font-size: 20px; font-weight: bold;">EMPRESA</p>
                </div>
                <div class="col-md-10"></div>
              </div>
            </div><!--row-->
            
            <div class="form-group form-group-default ">
                <label>Elija Categoría</label>
                <select onchange="changeFunc();" class="form-control" id="cats">
                  
                  <?PHP
                    if($categoria){
                      ?>
                        <option value="<?PHP echo $row["id_cat"]; ?>"selected>
                          <?PHP echo $categoria; ?>
                        </option>
                        
                      <?PHP
                    }
                  ?>
                </select>
            </div>
            
            <div class="form-group form-group-default ">
                <label>Seleccione el tiempo, horas, tipo o duración del empleo</label>
                <select class="form-control" id="tipoTiempo">
                  <?PHP
                    if($row['tipoTiempo']){
                      ?>
                        <option value="<?PHP echo $row['tipoTiempo']; ?>" selected>
                          <?PHP echo $row['tipoTiempo']; ?>
                        </option>
                      <?PHP
                    }
                  ?>
                  <option value="Medio Tiempo">Medio Tiempo</option>
                  <option value="Tiempo Completo">Tiempo Completo</option>
                  <option value="Temporal">Temporal</option>
                  <option value="Freelance">Freelance</option>
                  <option value="Internado">Internado</option>
                  <option value="Rol de Turnos">Rol de Turnos</option>
                </select>
            </div>
           
            <div class="form-group form-group-default ">
                <label>Escriba el nombre de la vacante</label>
                <input value="<?PHP echo $row['nombreVacante']; ?>" id="nombreVacante" type="text" class="form-control" required>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <p style="font-size: 15px; font-weight: bold;">Escriba la empresa para la cual se postula la vacante</p>
              </div>
            </div><!--row-->
           
            <div class="form-group form-group-default ">
                <label>Nombre de la Empresa</label>
                <input value="<?PHP echo $row['nombreEmpresa']; ?>" id="nombreEmpresa" type="text" class="form-control" required>
            </div>
            
            <div class="form-group form-group-default ">
                <label>Dirección de la Empresa</label>
                <input value="<?PHP echo $row['direccionEmpresa']; ?>" id="direccionEmpresa" type="text" class="form-control" required>
            </div>
            
            <div class="form-group form-group-default ">
                <label>Estado</label>
                <select id="estado" class="form-control" name="estados">
                  <?PHP
                  if($row['estado']){
                    ?>
                      <option value="<?PHP echo $row['estado']; ?>" selected><?php echo $row['estado'];?></option>
                    <?PHP
                  }
                  ?>
                    <option value="Todo México">Todo México</option>
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Baja California">Baja California</option>
                    <option value="Baja California Sur">Baja California Sur</option>
                    <option value="Campeche">Campeche</option>
                    <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                    <option value="Colima">Colima</option>
                    <option value="Chiapas">Chiapas</option>
                    <option value="Chihuahua">Chihuahua</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Durango">Durango</option>
                    <option value="Guanajuato">Guanajuato</option>
                    <option value="Guerrero">Guerrero</option>
                    <option value="Hidalgo">Hidalgo</option>
                    <option value="Jalisco">Jalisco</option>
                    <option value="México">México</option>
                    <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                    <option value="Morelos">Morelos</option>
                    <option value="Nayarit">Nayarit</option>
                    <option value="Nuevo León">Nuevo León</option>
                    <option value="Oaxaca">Oaxaca</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Querétaro">Querétaro</option>
                    <option value="Quintana Roo">Quintana Roo</option>
                    <option value="San Luis Potosí">San Luis Potosí</option>
                    <option value="Sinaloa">Sinaloa</option>
                    <option value="Sonora">Sonora</option>
                    <option value="Tabasco">Tabasco</option>
                    <option value="Tamaulipas">Tamaulipas</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                    <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
                    <option value="Yucatán">Yucatán</option>
                    <option value="Zacatecas">Zacatecas</option>
                    <option value="Todo Estados Unidos">Todo Estados Unidos</option>
                    <option value="Alabama">Alabama</option>
                    <option value="Alaska">Alaska</option>
                    <option value="Arizona">Arizona</option>
                    <option value="Arkansas">Arkansas</option>
                    <option value="California">California</option>
                    <option value="Colorado">Colorado</option>
                    <option value="Connecticut">Connecticut</option>
                    <option value="Delaware">Delaware</option>
                    <option value="District Of Columbia">District Of Columbia</option>
                    <option value="Florida">Florida</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Idaho">Idaho</option>
                    <option value="Illinois">Illinois</option>
                    <option value="Indiana">Indiana</option>
                    <option value="Iowa">Iowa</option>
                    <option value="Kansas">Kansas</option>
                    <option value="Kentucky">Kentucky</option>
                    <option value="Louisiana">Louisiana</option>
                    <option value="Maine">Maine</option>
                    <option value="Maryland">Maryland</option>
                    <option value="Massachusetts">Massachusetts</option>
                    <option value="Michigan">Michigan</option>
                    <option value="Minnesota">Minnesota</option>
                    <option value="Mississippi">Mississippi</option>
                    <option value="Missouri">Missouri</option>
                    <option value="Montana">Montana</option>
                    <option value="Nebraska">Nebraska</option>
                    <option value="Nevada">Nevada</option>
                    <option value="New Hampshire">New Hampshire</option>
                    <option value="New Jersey">New Jersey</option>
                    <option value="New Mexico">New Mexico</option>
                    <option value="New York">New York</option>
                    <option value="North Carolina">North Carolina</option>
                    <option value="North Dakota">North Dakota</option>
                    <option value="Ohio">Ohio</option>
                    <option value="Oklahoma">Oklahoma</option>
                    <option value="Oregon">Oregon</option>
                    <option value="Pennsylvania">Pennsylvania</option>
                    <option value="Rhode Island">Rhode Island</option>
                    <option value="South Carolina">South Carolina</option>
                    <option value="South Dakota">South Dakota</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas">Texas</option>
                    <option value="Utah">Utah</option>
                    <option value="Vermont">Vermont</option>
                    <option value="Virginia">Virginia</option>
                    <option value="Washington">Washington</option>
                    <option value="West Virginia">West Virginia</option>
                    <option value="Wisconsin">Wisconsin</option>
                    <option value="Wyoming">Wyoming</option>
                  </select>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <p style="font-size: 15px; font-weight: bold;">Para generar la Geo referenciación de la vacante agrege latitud y longitud</p>
              </div>
            </div><!--row-->
        
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-group-default">
                        <label>Latitud</label>
                        <input value="<?PHP echo $row["latitud"]; ?>" id="latitud" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-group-default">
                        <label>Longitud</label>
                        <input value="<?PHP echo $row["longitud"]; ?>" id="longitud" type="text" class="form-control">
                    </div>
                </div>
            </div><!--row-->
            
            <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 15px; font-weight: bold;">Ejemplo: Latitud: 40.7033127, Longitud: -73.979681 Puede ubicar las cordenadas en la barra de direcciones, desde la url de google maps: <a href="https://www.google.com/maps/place/Nueva+York,+EE.+UU./@40.7033127,-73.979681,11z/data.....">Clic</a></p>
              </div>
            </div><!--row-->
            
            <div style="margin-top: 10px;" class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-file-text"></span>
                </div>
                <div class="col-md-11">
                  <p style="font-size: 20px; font-weight: bold;">Escriba una breve descripción de la vacante y/o empleo</p>
                </div>
              </div>
            </div><!--row-->
            
            <div class="form-group form-group-default ">
                <label>Escriba no más de 5 líneas para describir la vacante</label>
                <textarea id="descripcion" style="height: 200px;" type="email" class="form-control"><?PHP echo $row["descripcion"]; ?></textarea>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-list"></span>
                </div>
                <div class="col-md-11">
                  <p style="font-size: 20px; font-weight: bold;">Escriba una breve lista de requisitos</p>
                </div>
              </div>
            </div><!--row-->
            
            <div class="form-group form-group-default ">
                <label>Escriba una breve lista de requisitos necesarios para cubrir la vacante</label>
                <textarea id="requisitos" style="height: 200px;" type="email" class="form-control"><?PHP echo $row["requisitos"]; ?></textarea>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-cog fa-spin"></span>
                </div>
                <div class="col-md-11">
                  <p style="font-size: 20px; font-weight: bold;">Escriba las actividades a desempeñar en el puesto</p>
                </div>
              </div>
            </div><!--row-->
            
            <div class="form-group form-group-default ">
                <label>Escriba una lista y/o describa brevemente las actividades a desempeñar en el empleo</label>
                <textarea id="actividades" style="height: 200px;" type="email" class="form-control"><?PHP echo $row["actividades"]; ?></textarea>
            </div>
            <!--
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-trophy"></span>
                </div>
                <div class="col-md-11">
                  <p style="font-size: 20px; font-weight: bold;">Escriba los incentivos que brinda la empresa a sus colaboradores</p>
                </div>
              </div>
            </div>
            -->
            <!--row-->
            <!--
            <div class="form-group form-group-default ">
                <label>Escriba una lista y/o describa brevemente los incentivos que otorga la empresa</label>
                <textarea id="incentivos" style="height: 200px;" type="email" class="form-control"><?PHP echo $row["incentivos"]; ?></textarea>
            </div>
            -->
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-star-o"></span>
                </div>
                <div class="col-md-11">
                  <p style="font-size: 20px; font-weight: bold;">Escriba las prestaciones que brinda la empresa a sus colaboradores</p>
                </div>
              </div>
            </div><!--row-->
            
            <div class="form-group form-group-default ">
                <label>Escriba una lista y/o describa brevemente las prestaciones que otorga la empresa</label>
                <textarea id="prestaciones" style="height: 200px;" type="email" class="form-control"><?PHP echo $row["prestaciones"]; ?></textarea>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-money"></span>
                </div>
                <div class="col-md-11">
                  <p style="font-size: 20px; font-weight: bold;">Escriba el monto de la remuneración económica</p>
                </div>
              </div>
            </div><!--row-->
            
            <div class="form-group form-group-default ">
                <label>Escriba en un par de líneas cuál sería el tiempo de remuneración para el postulante</label>
                <textarea id="remuneracion" style="height: 200px;" type="email" class="form-control"><?PHP echo $row["remuneracion"]; ?></textarea>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-user"></span>
                </div>
                <div class="col-md-11">
                  <p style="font-size: 20px; font-weight: bold;">Escriba los datos y forma de contactos</p>
                </div>
              </div>
            </div><!--row-->
            
            <div class="form-group form-group-default ">
                <label>Escriba los datos de con quién debe contactarse el postulante y forma de aplicar o postularse para la vacante</label>
                <textarea id="contacto" style="height: 200px;" type="email" class="form-control"><?PHP echo $row["contacto"]; ?></textarea>
            </div>

            <div class="form-group form-group-default ">
                <label>Escriba la dirección de la imágen de la vacante para visualizarse en redes sociales y Portal LWS</label>
                <input value="<?PHP echo $row['imagen']; ?>" id="imagen" type="text" class="form-control" required>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 15px; font-weight: bold;">Antes de dar de alta le recomendamos dar una revisada ortográfica y revisar los datos escritos. Una vez realizada su revisión continue con el proceso de registro.</p>
              </div>
            </div><!--row-->
            
            <div class="row">
              <div class="col-md-12 text-center">
                <?PHP
                  if($row['id']){
                    ?>
                      <button onclick="altaVacante('2','<?PHP echo $row['id']; ?>');" type="button" class="btn btn-success"><span class="fa fa-building-o" style="padding-right:15px; font-size: 15px;"></span>Modificar Vacante</button>
                    <?PHP
                  } else {
                    ?>
                      <button onclick="altaVacante('1');" type="button" class="btn btn-success"><span class="fa fa-building-o" style="padding-right:15px; font-size: 15px;"></span>Alta Vacante</button>
                    <?PHP
                  }
                ?>
              </div>
            </div><!--row-->
            
        </form>
      </div><!--row-->
    </div><!--row-->
  </main>
</div>
</body>
<html>
<?PHP
} else {
  header("Location: login.php");
}
?>