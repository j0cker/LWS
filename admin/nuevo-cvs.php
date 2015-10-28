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
$(document).ready(function(){
	
  $(function() {
     $("#datepicker").datepicker({
	   changeMonth: true,
       changeYear: true,
	   "dateFormat": 'dd-mm-yy',
	   showOn: "both",
	   buttonImage: "../images/calendar.png",
	   buttonImageOnly: false,
       buttonText: "Select date"
	 });
	 
	 $("#datepicker2").datepicker({
	   changeMonth: true,
       changeYear: true,
	   "dateFormat": 'dd-mm-yy',
	   showOn: "both",
	   buttonImage: "../images/calendar.png",
	   buttonImageOnly: false,
       buttonText: "Select date"
	 });
   
  });
  
});  
</script>
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
					$("#cats").html($("#cats").html() + html);
			  } else {
				$("#cats").html('ERROR');
			  }
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
}
</script>
<script>
function nuevoCV(){
  if(!$("#nombreCompleto").val()){
    alert("Rellenar el campo Nombre Completo");
  } else if(!$("#telefono").val()){
    alert("Rellenar el campo Teléfono");
  } else if(!$("#email").val()){
    alert("Rellenar el campo Email");
  } else if(!$("#estado").val()){
    alert("Rellenar el campo Estado");
  } else if(!$("#oferta").val()){
    alert("Rellenar el campo Oferta");
  } else if(!$("#tituloProfesional").val()){
    alert("Rellenar el campo Titulo Profesional");
  } else if(!$("#gradoEstudios").val()){
    alert("Rellenar el campo de Grado de Estudios");
  } else if(!$("#diplomado").val()){
    alert("Rellenar el campo de Diplomado");
  } else if(!$("#habilidades").val()){
    alert("Rellenar el campo de Habilidades");
  } else if(!$("#competencias").val()){
    alert("Rellenar el campo de Competencias");
  } else if(!$("#ultimoEmpleador").val()){
    alert("Rellenar el campo de Último Empleados");
  } else if(!$("#ultimoEmpleo").val()){
    alert("Rellenar el campo de Último Empleo");
  } else if(!$("#datepicker").val()){
    alert("Rellenar el campo de Fecha 1");
  } else if(!$("#datepicker2").val()){
    alert("Rellenar el campo de Fecha 2");
  } else if(!$("#trabajaActualmente").val()){
    alert("Rellenar el campo de Trabaja Actualmente");
  } else if(!$("#descripcionAnteriores").val()){
    alert("Rellenar el campo de Descripcion Anteriores");
  } else if(!$("#comentarios").val()){
    alert("Rellenar el campo de Comentarios");
  } else {
    $.ajax({data: { id_cat:$("#cats").val(),
                    tipoTiempo:$("#tipoTiempo").val(),
                    nombreCompleto:$("#nombreCompleto").val(),
                    telefono:$("#telefono").val(),
                    email:$("#email").val(),
                    estado:$("#estado").val(),
                    oferta:$("#oferta").val(),
                    tituloProfesional:$("#tituloProfesional").val(),
                    gradoEstudios:$("#gradoEstudios").val(),
                    diplomado:$("#diplomado").val(),
                    habilidades:$("#habilidades").val(),
                    competencias:$("#competencias").val(),
                    ultimoEmpleador:$("#ultimoEmpleador").val(),
                    ultimoEmpleo:$("#ultimoEmpleo").val(),
                    datepicker:$("#datepicker").val(),
                    datepicker2:$("#datepicker2").val(),
                    trabajaActualmente:$("#trabajaActualmente").val(),
                    descripcionAnteriores:$("#descripcionAnteriores").val(),
                    vacante1:$("#vacante1").val(),
                    vacante2:$("#vacante2").val(),
                    vacante3:$("#vacante3").val(),
                    vacante4:$("#vacante4").val(),
                    vacante5:$("#vacante5").val(),
                    vacante6:$("#vacante6").val(),
                    comentarios:$("#comentarios").val(),
                    option:1,
                    /*id:id*/ },
            url:   "scripts/alta-cvs.php",
            type:  'POST',
        success:  function (response) {
          alert("CV Agregado");
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
                  <span style="font-size: 15px;" class="fa fa-briefcase"></span> Altas de CV's
                </a>
            </div>
        </div>
    </div>
    
    <div style="margin-top: 20px;" class="row text-center">
      <div class="col-md-1"></div>
      <div style="background-color: #AD1457; color: white;" class="col-md-10 panel">
      <!-- Default panel contents -->
      <div class="panel-heading"><span style="font-size: 20px; padding-right: 10px;" class="fa fa-plus"></span> Nuevo CV's</div>
      <div style="color: black; background-color: #FFF;" class="panel-body text-left">
        <form role="form">            
            <div class="form-group form-group-default ">
                <label>Seleccione Categoría</label>
                <select class="form-control" id="cats">
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
                <label>Escriba tipo de empleo que busca el candidato</label>
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
                </select>
            </div>
        
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-user"></span>
                </div>
                <div class="col-md-3">
                  <p style="font-size: 20px; font-weight: bold;">DATOS GENERALES</p>
                </div>
                <div class="col-md-8"></div>
              </div>
            </div><!--row-->
            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group form-group-default ">
                  <label>Nombre y Apellido</label>
                  <input id="nombreCompleto" type="email" class="form-control" required>
                </div>
                
                <div class="form-group form-group-default ">
                  <label>Teléfono de Contacto</label>
                  <input id="telefono" type="email" class="form-control" required>
                </div>
                
                <div class="form-group form-group-default ">
                  <label>Email de contacto</label>
                  <input id="email" type="email" class="form-control" required>
                </div>
                
                <div class="form-group form-group-default ">
                  <label>Estado en el que se radica</label><br />
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
              </div>
            </div><!--row-->
           

            
            <div class="row">
              <div class="col-md-12">
                <p style="font-size: 15px; font-weight: bold;">Escriba la oferta laboral para la cual le gustaría postular al candidato</p>
              </div>
            </div><!--row-->
        
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group form-group-default">
                        <label>Oferta Laboral</label>
                        <input id="oferta" type="text" class="form-control" required>
                    </div>
                </div>
            </div><!--row-->
            
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-file"></span>
                </div>
                <div class="col-md-6">
                  <p style="font-size: 20px; font-weight: bold;">EXPERIENCIA LABORAL / SOBRE EL CANDIDATO</p>
                </div>
                <div class="col-md-5"></div>
              </div>
            </div><!--row-->
            
            <div class="row">
              <div class="col-md-12">
                <p style="font-size: 15px; font-weight: bold;">Escriba algunos datos referentes a la experiencia del candidato</p>
              </div>
            </div><!--row-->
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group form-group-default">
                        <label>Título profesional y/o Profesión</label>
                        <input id="tituloProfesional" type="text" class="form-control" required>
                    </div>
                </div>
            </div><!--row-->
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group form-group-default">
                        <label>Último grado de estudios</label>
                        <input id="gradoEstudios" type="text" class="form-control" required>
                    </div>
                </div>
            </div><!--row-->
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group form-group-default">
                        <label>Algún otro curso y/o Diplomado</label>
                        <input id="diplomado" type="text" class="form-control" required>
                    </div>
                </div>
            </div><!--row-->
            
            <div class="form-group form-group-default ">
                <label>Escriba algunas de las habilidades que tiene el candidato</label>
                <textarea id="habilidades" style="height: 200px;" type="email" class="form-control"></textarea>
            </div>
            
            <div class="form-group form-group-default ">
                <label>Escriba algunas de las competencias laborales que tiene el candidato</label>
                <textarea id="competencias" style="height: 200px;" type="email" class="form-control"></textarea>
            </div>
            
            
            <div style="margin-top: 10px;" class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-cog"></span>
                </div>
                <div class="col-md-11">
                  <p style="font-size: 20px; font-weight: bold;">EXPERIENCIA LABORAL / SOBRE EL ÚLTIMO EMPLEO</p>
                </div>
              </div>
            </div><!--row-->
            
            
            <div class="form-group form-group-default ">
                <label>Escriba algunos datos referentes a la experiencia del candidato en su último empleo</label>
            </div>
            
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group form-group-default">
                        <label>Último Empleador</label>
                        <input id="ultimoEmpleador" type="text" class="form-control" required>
                    </div>
                </div>
            </div><!--row-->
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group form-group-default">
                        <label>Ubicación del último empleo</label>
                        <input id="ultimoEmpleo" type="text" class="form-control" required>
                    </div>
                </div>
            </div><!--row-->
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-group-default">
                        <label>Desde</label>
                        <input id="datepicker" type="text" class="form-control" required>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-group form-group-default">
                        <label>Hasta</label>
                        <input id="datepicker2" type="text" class="form-control" required>
                    </div>
                </div>
            </div><!--row-->
            
            <div class="row">
                <div class="col-sm-12">
                  <div class="checkbox">
                    <label>
                      <input id="trabajaActualmente" type="checkbox"> ¿Actualmente trabaja ahí?
                    </label>
                  </div>
                </div>
            </div><!--row-->
            
            
            <div class="form-group form-group-default ">
                <label>Escribe una breve descripción de las actividades que realizaban en su trabajo anterior y/o actual</label>
                <textarea id="descripcionAnteriores" style="height: 200px;" type="email" class="form-control"></textarea>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-file-o"></span>
                </div>
                <div class="col-md-11">
                  <p style="font-size: 20px; font-weight: bold;">No. clave de la vacane para la que aplica</p>
                </div>
              </div>
            </div><!--row-->
            
            <div class="form-group form-group-default ">
                <label>Escriba números claves de la vacante para la cual considera que el candidato es apto.</label>
                <textarea style="height: 200px;" type="email" class="form-control"></textarea>
            </div>
            
            <div class="row">
              <div class="col-sm-12">
                <div class="col-sm-4">
                    <div class="form-group form-group-default">
                        <label>Vacante 1</label>
                        <input id="vacante1" type="text" class="form-control" required>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group form-group-default">
                        <label>Vacante 2</label>
                        <input id="vacante2" type="text" class="form-control" required>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group form-group-default">
                        <label>Vacante 3</label>
                        <input id="vacante3" type="text" class="form-control" required>
                    </div>
                </div>
              </div>
            </div><!--row-->
            
            <div class="row">
              <div class="col-sm-12">
                <div class="col-sm-4">
                    <div class="form-group form-group-default">
                        <label>Vacante 4</label>
                        <input id="vacante4" type="text" class="form-control" required>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group form-group-default">
                        <label>Vacante 5</label>
                        <input id="vacante5" type="text" class="form-control" required>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group form-group-default">
                        <label>Vacante 6</label>
                        <input id="vacante6" type="text" class="form-control" required>
                    </div>
                </div>
              </div>
            </div><!--row-->
            
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-1">
                  <span style="font-size: 25px; padding-right: 15px;" class="fa fa-comment"></span>
                </div>
                <div class="col-md-11">
                  <p style="font-size: 20px; font-weight: bold;">Otros comentarios y/o notas del reclutador</p>
                </div>
              </div>
            </div><!--row-->
            
            <div class="form-group form-group-default ">
                <label>Si considera necesario agregar comentarios y/o notas al reclutador</label>
                <textarea id="comentarios" style="height: 200px;" type="email" class="form-control"></textarea>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 15px; font-weight: bold;">Antes de dar de alta le recomendamos dar una revisada ortográfica y revisar los datos escritos. Una vez realizada su revisión continue con el proceso de registro.</p>
              </div>
            </div><!--row-->
            
            <div class="row">
              <div class="col-md-12 text-center">
                  <button onclick="nuevoCV();" type="button" class="btn btn-success"><span class="fa fa-plus" style="padding-right:15px; font-size: 15px;"></span>Nuevo CV</button>
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