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
  /*Contadores*/
$( document ).ready(function() {
  contCat();
  contVaca();
});
function contVaca(){
	$.ajax({url:   "scripts/get-cont-vacantes.php",
			type:  'GET',
			success:  function (response) {
			  obj = JSON.parse(response);
			  if(obj.true!="false"){
          console.log(obj.TContCat);
          $("#contVaca1").html(obj.TContCat);
			  } else {
			    alert("Error Contando Categorías");
			  }
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
}
function contCat(){
	$.ajax({url:   "scripts/get-cont-categorias.php",
			type:  'GET',
			success:  function (response) {
			  obj = JSON.parse(response);
			  if(obj.true!="false"){
          console.log(obj.TContCat);
          $("#contCat1").html(obj.TContCat);
			  } else {
			    alert("Error Contando Categorías");
			  }
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
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
                  <span style="font-size: 15px;" class="fa fa-tachometer"></span>Tablero Principal
                </a>
            </div>
        </div>
    </div>
    <div style="margin-top: 10px;" class="row">
        <div class="col-md-12 text-center">
            <div style="" class="col-md-3">
              <button style="background-color: #C62828; border-color: #C62828; width: 200px;" type="button" class="btn btn-success"><span style="font-size: 25px;" class="fa fa-building-o"></span><br />Total de Vacantes<br />123</button>
            </div>
              <div style="" class="col-md-3">
              <button style="background-color: #4527A0; border-color: #4527A0; width: 200px;" type="button" class="btn btn-success"><span style="font-size: 25px;" class="fa fa-building-o"></span><br />Vacantes Nuevas en el Mes<br /><span id="contVaca1"></span></button>
            </div>
            <div style="" class="col-md-3">
              <button style="background-color: #0277BD; border-color: #0277BD; width: 200px;" type="button" class="btn btn-success"><span style="font-size: 25px;" class="fa fa-briefcase"></span><br />Total de CV's<br />123</button>
            </div>
            <div style="" class="col-md-3">
              <button style="background-color: #2E7D32; border-color: #2E7D32; width: 200px;" type="button" class="btn btn-success"><span style="font-size: 25px;" class="fa fa-table"></span><br />Total de Categorías<br /><span id="contCat1"></span></button>
            </div>
        </div>
    </div><!--row-->
    
    <div style="margin-top: 10px;" class="row">
        <div class="col-md-12 text-center">
            <div style="" class="col-md-12">
              <button style="margin-top: 10px;" type="button" class="btn btn-warning">Descargar Base de Datos MYSQL</button>
            </div>
        </div>
    </div><!--row-->
    
    <div style="margin-top: 20px;" class="row text-center">
      <div class="col-md-1"></div>
      <div style="background-color: #AD1457; color: white;" class="col-md-10 panel">
      <!-- Default panel contents -->
      <div class="panel-heading"><span style="font-size: 20px; padding-right: 10px;" class="fa fa-building-o"></span> Vacantes Publicadas Recientemente</div>
      <div style="color: black; background-color: #FFF;" class="panel-body text-left">
        <div class="row">
          <div class="col-md-3">
            <a href="alta-vacantes.php">
              <button type="button" class="btn btn-success"><span style="padding-right: 10px;" class="fa fa-plus"></span>Nueva Vacante</button>
            </a>
          </div>
          <div class="col-md-6">
            <div class="input-group">
              <span style="top: 0px;" class="input-group-addon glyphicon glyphicon-search" id="basic-addon1"></span>
              <input style="" class="form-control" type="text" id="palabraArrayUser" onkeyup="buscarArraUser();" placeholder="Buscar: ">
            </div>
          </div>
          <div class="col-md-3">
          </div>
        </div><!--row-->
        <div style="margin-top: 20px;" class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-10">
            <center>
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
              <thead>
                <tr>
                  <th style="text-align: left;">ID</th>
                  <th style="text-align: left;">Empresa</th>
                  <th style="text-align: left;">Categoría</th>
                  <th style="text-align: left;">Estado</th>
                  <th style="text-align: left;">Hora/Tipo</th>
                  <th style="text-align: left;">Publicación</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Monta Cargista</td>
                  <td>Operador</td>
                  <td>Distrito Federal</td>
                  <td>SkyAlert</td>
                  <td>25/Julio/2015</td>
                  <td>
                    <div class="dropdown">
                      <button style="margin-top: -7px;" class="glyphicon glyphicon-share btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a style="text-align: left;" href="#">Facebook</a></li>
                        <li><a style="text-align: left;" href="#">Twitter</a></li>
                      </ul>
                    </div>
                  </td>
                  <td><button style="margin-top: -7px;" type="button" class="glyphicon glyphicon-edit btn btn-warning"></button></td>
                  <td><button style="margin-top: -7px;" type="button" class="glyphicon glyphicon-remove btn btn-danger"></button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Monta Cargista</td>
                  <td>Operador</td>
                  <td>Distrito Federal</td>
                  <td>SkyAlert</td>
                  <td>25/Julio/2015</td>
                  <td>
                    <div class="dropdown">
                      <button style="margin-top: -7px;" class="glyphicon glyphicon-share btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a style="text-align: left;" href="#">Facebook</a></li>
                        <li><a style="text-align: left;" href="#">Twitter</a></li>
                      </ul>
                    </div>
                  </td>
                  <td><button style="margin-top: -7px;" type="button" class="glyphicon glyphicon-edit btn btn-warning"></button></td>
                  <td><button style="margin-top: -7px;" type="button" class="glyphicon glyphicon-remove btn btn-danger"></button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Monta Cargista</td>
                  <td>Operador</td>
                  <td>Distrito Federal</td>
                  <td>SkyAlert</td>
                  <td>25/Julio/2015</td>
                  <td>
                    <div class="dropdown">
                      <button style="margin-top: -7px;" class="glyphicon glyphicon-share btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a style="text-align: left;" href="#">Facebook</a></li>
                        <li><a style="text-align: left;" href="#">Twitter</a></li>
                      </ul>
                    </div>
                  </td>
                  <td><button style="margin-top: -7px;" type="button" class="glyphicon glyphicon-edit btn btn-warning"></button></td>
                  <td><button style="margin-top: -7px;" type="button" class="glyphicon glyphicon-remove btn btn-danger"></button></td>
                </tr>
              </tbody>
            </table>
            </center>
          </div>
          <div class="col-md-1">
          </div>
        </div>
      </div><!--row-->
      <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-10">
             <nav>
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">de</a></li>
                <li><a href="#">2</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-md-1">
          </div>
      </div><!--row-->
      <div class="col-md-1"></div>
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