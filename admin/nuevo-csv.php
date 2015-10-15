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
	   minDate: 0,
	   showOn: "both",
	   buttonImage: "../images/calendar.png",
	   buttonImageOnly: false,
       buttonText: "Select date"
	 });
	 
	 $("#datepicker2").datepicker({
	   changeMonth: true,
       changeYear: true,
	   "dateFormat": 'dd-mm-yy',
	   minDate: 0,
	   showOn: "both",
	   buttonImage: "../images/calendar.png",
	   buttonImageOnly: false,
       buttonText: "Select date"
	 });
  });
});  
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
            <div class="row">
              <div class="col-md-6">
                <div class="form-group form-group-default ">
                  <label>Escriba tipo de empleo que busca el candidato</label><br />
                  <select class="form-control">
                    <option value="tiempo completo">Tiempo completo</option>
                  </select>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group form-group-default ">
                  <label>Seleccione Categoría</label><br />
                  <select class="form-control">
                    <option value="tiempo completo">Operador</option>
                  </select>
                </div>
              </div>
            </div><!--row-->
        
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
                  <input type="email" class="form-control" required>
                </div>
                
                <div class="form-group form-group-default ">
                  <label>Teléfono de Contacto</label>
                  <input type="email" class="form-control" required>
                </div>
                
                <div class="form-group form-group-default ">
                  <label>Email de contacto</label>
                  <input type="email" class="form-control" required>
                </div>
                
                <div class="form-group form-group-default ">
                  <label>Estado en el que se radica</label><br />
                  <select class="form-control" name="estados">
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
                        <input type="text" class="form-control" required>
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
                        <input type="text" class="form-control" required>
                    </div>
                </div>
            </div><!--row-->
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group form-group-default">
                        <label>Último grado de estudios</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
            </div><!--row-->
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group form-group-default">
                        <label>Algún otro curso y/o Diplomado</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
            </div><!--row-->
            
            <div class="form-group form-group-default ">
                <label>Escriba algunas de las habilidades que tiene el candidato</label>
                <textarea style="height: 200px;" type="email" class="form-control"></textarea>
            </div>
            
            <div class="form-group form-group-default ">
                <label>Escriba algunas de las competencias laborales que tiene el candidato</label>
                <textarea style="height: 200px;" type="email" class="form-control"></textarea>
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
                        <input type="text" class="form-control" required>
                    </div>
                </div>
            </div><!--row-->
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group form-group-default">
                        <label>Ubicación del último empleo</label>
                        <input type="text" class="form-control" required>
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
                      <input type="checkbox"> ¿Actualmente trabaja ahí?
                    </label>
                  </div>
                </div>
            </div><!--row-->
            
            
            <div class="form-group form-group-default ">
                <label>Escribe una breve descripción de las actividades que realizaban en su trabajo anterior y/o actual</label>
                <textarea style="height: 200px;" type="email" class="form-control"></textarea>
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
                        <input type="text" class="form-control" required>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group form-group-default">
                        <label>Vacante 2</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group form-group-default">
                        <label>Vacante 3</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
              </div>
            </div><!--row-->
            
            <div class="row">
              <div class="col-sm-12">
                <div class="col-sm-4">
                    <div class="form-group form-group-default">
                        <label>Vacante 4</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group form-group-default">
                        <label>Vacante 5</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="form-group form-group-default">
                        <label>Vacante 6</label>
                        <input type="text" class="form-control" required>
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
                <textarea style="height: 200px;" type="email" class="form-control"></textarea>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 15px; font-weight: bold;">Antes de dar de alta le recomendamos dar una revisada ortográfica y revisar los datos escritos. Una vez realizada su revisión continue con el proceso de registro.</p>
              </div>
            </div><!--row-->
            
            <div class="row">
              <div class="col-md-12 text-center">
                  <button type="button" class="btn btn-success"><span class="fa fa-plus" style="padding-right:15px; font-size: 15px;"></span>Nuevo CV</button>
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