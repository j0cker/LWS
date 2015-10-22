<?PHP 
require_once('session.php');
if($status=="OK"){
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<?PHP
require_once('desktop/header.php');
?>
<script>
$( document ).ready(function() {
    getCategorias();
});
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
					$("#cats").html(html);
			  } else {
				$("#cats").html('ERROR');
			  }
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
}
function altaVacante(){
  if(!$("#nombreEmpresa").val()){
    alert("Llenar Nombre de la empresa");
  } else if(!$("#direccionEmpresa").val()){
	alert("Llenar Dirección de la empresa");
  } else if(!$("#estado").val()){
	alert("Seleccionar Estado");
  } else if(!$("#descripcion").val()){
	alert("Llenar Descripción");
  } else if(!$("#requisitos").val()){
	alert("Llenar Requisitos");
  } else if(!$("#actividades").val()){
	alert("Llenar Actividades");
  } else if(!$("#incentivos").val()){
	alert("Llenar Incentivos");
  } else if(!$("#prestaciones").val()){
	alert("Llenar prestaciones");
  } else if(!$("#remuneracion").val()){
	alert("Llenar Remuneración");
  } else if(!$("#contacto").val()){
	alert("Llenar Contacto");
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
						  incentivos:$("#incentivos").val(),
						  prestaciones:$("#prestaciones").val(),
						  remuneracion:$("#remuneracion").val(),
						  contacto:$("#contacto").val() },
					url:   "scripts/alta-vacantes.php",
			type:  'POST',
			success:  function (response) {
			  alert("Vacante Agregada");
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
      <div class="panel-heading"><span style="font-size: 20px; padding-right: 10px;" class="fa fa-plus"></span> Nueva Vacante</div>
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
                <select class="form-control" id="cats"></select>
            </div>
            
            <div class="form-group form-group-default ">
                <label>Seleccione el tiempo, horas, tipo o duración del empleo</label>
                <select class="form-control" id="tipoTiempo">
                  <option value="Medio Tiempo">Medio Tiempo</option>
                  <option value="Tiempo Completo">Tiempo Completo</option>
                  <option value="Temporal">Temporal</option>
                  <option value="Freelance">Freelance</option>
                </select>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <p style="font-size: 15px; font-weight: bold;">Escriba la empresa para la cual se postula la vacante</p>
              </div>
            </div><!--row-->
           
            <div class="form-group form-group-default ">
                <label>Nombre de la Empresa</label>
                <input id="nombreEmpresa" type="text" class="form-control" required>
            </div>
            
            <div class="form-group form-group-default ">
                <label>Dirección de la Empresa</label>
                <input id="direccionEmpresa" type="text" class="form-control" required>
            </div>
            
            <div class="form-group form-group-default ">
                <label>Estado</label>
                <select id="estado" class="form-control" name="estados">
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
                        <input id="latitud" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-group-default">
                        <label>Longitud</label>
                        <input id="longitud" type="text" class="form-control">
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
                <textarea id="descripcion" style="height: 200px;" type="email" class="form-control"></textarea>
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
                <textarea id="requisitos" style="height: 200px;" type="email" class="form-control"></textarea>
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
                <textarea id="actividades" style="height: 200px;" type="email" class="form-control"></textarea>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-trophy"></span>
                </div>
                <div class="col-md-11">
                  <p style="font-size: 20px; font-weight: bold;">Escriba los incentivos que brinda la empresa a sus colaboradores</p>
                </div>
              </div>
            </div><!--row-->
            
            <div class="form-group form-group-default ">
                <label>Escriba una lista y/o describa brevemente los incentivos que otorga la empresa</label>
                <textarea id="incentivos" style="height: 200px;" type="email" class="form-control"></textarea>
            </div>
            
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
                <textarea id="prestaciones" style="height: 200px;" type="email" class="form-control"></textarea>
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
                <textarea id="remuneracion" style="height: 200px;" type="email" class="form-control"></textarea>
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
                <textarea id="contacto" style="height: 200px;" type="email" class="form-control"></textarea>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 15px; font-weight: bold;">Antes de dar de alta le recomendamos dar una revisada ortográfica y revisar los datos escritos. Una vez realizada su revisión continue con el proceso de registro.</p>
              </div>
            </div><!--row-->
            
            <div class="row">
              <div class="col-md-12 text-center">
                  <button onclick="altaVacante();" type="button" class="btn btn-success"><span class="fa fa-building-o" style="padding-right:15px; font-size: 15px;"></span>Altas de Vacantes</button>
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