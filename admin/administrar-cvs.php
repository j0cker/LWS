<?PHP 
require_once('session.php');
if($status=="OK"){
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<?PHP
require_once('desktop/header.php');
?>
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
                  <span style="font-size: 15px;" class="fa fa-briefcase"></span> Administrar CV's
                </a>
            </div>
        </div>
    </div>
    <div style="margin-top: 10px;" class="row">
        <div class="col-md-12 text-center">
            <div style="" class="col-md-12">
              <button style="background-color: #0277BD; border-color: #0277BD; width: 200px;" type="button" class="btn btn-success"><span style="font-size: 25px;" class="fa fa-briefcase"></span><br />CV's Nuevos en el Mes<br />123</button>
            </div>
        </div>
    </div><!--row-->
    
    <div style="margin-top: 10px;" class="row">
        <div class="col-md-12 text-center">
            <div style="" class="col-md-12">
              <button style="margin-top: 10px;" type="button" class="btn btn-warning">Descargar Base de CV's en Excel</button>
            </div>
        </div>
    </div><!--row-->
    
    <div style="margin-top: 20px;" class="row text-center">
      <div class="col-md-1"></div>
      <div style="background-color: #AD1457; color: white;" class="col-md-10 panel">
      <!-- Default panel contents -->
      <div class="panel-heading"><span style="font-size: 20px; padding-right: 10px;" class="fa fa-plus"></span> CV's publicados recientemente</div>
      <div style="color: black; background-color: #FFF;" class="panel-body text-left">
        <div class="row">
          <div class="col-md-3">
            <a href="nuevo-csv.php">
              <button type="button" class="btn btn-success"><span style="padding-right: 10px;" class="fa fa-plus"></span>Nuevo CV</button>
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
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
              <thead>
                <tr>
                  <th style="text-align: left;">ID</th>
                  <th style="text-align: left;">Talento</th>
                  <th style="text-align: left;">Categoría</th>
                  <th style="text-align: left;">Estado</th>
                  <th style="text-align: left;">Horas/Tipo</th>
                  <th style="text-align: left;">Publicación</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Nombre Completo</td>
                  <td>Operador</td>
                  <td>Distrito Federal</td>
                  <td>Medio Tiempo</td>
                  <td>12/07/2015</td>
                  <td>
                    <div class="dropdown">
                      <button style="margin-top: -7px;" class="glyphicon glyphicon-download btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a style="text-align: left;" href="#">Descargar PDF</a></li>
                        <li><a style="text-align: left;" href="#">Descargar Excel</a></li>
                      </ul>
                    </div>
                  </td>
                  <td><button style="margin-top: -7px;" type="button" class="glyphicon glyphicon-edit btn btn-warning"></button></td>
                  <td><button style="margin-top: -7px;" type="button" class="glyphicon glyphicon-remove btn btn-danger"></button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Nombre Completo</td>
                  <td>Operador</td>
                  <td>Distrito Federal</td>
                  <td>Tiempo Completo</td>
                  <td>12/07/2015</td>
                  <td>
                    <div class="dropdown">
                      <button style="margin-top: -7px;" class="glyphicon glyphicon-download btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a style="text-align: left;" href="#">Descargar PDF</a></li>
                        <li><a style="text-align: left;" href="#">Descargar Excel</a></li>
                      </ul>
                    </div>
                  </td>
                  <td><button style="margin-top: -7px;" type="button" class="glyphicon glyphicon-edit btn btn-warning"></button></td>
                  <td><button style="margin-top: -7px;" type="button" class="glyphicon glyphicon-remove btn btn-danger"></button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Nombre Completo</td>
                  <td>Operador</td>
                  <td>Distrito Federal</td>
                  <td>Eventual</td>
                  <td>12/07/2015</td>
                  <td>
                    <div class="dropdown">
                      <button style="margin-top: -7px;" class="glyphicon glyphicon-download btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a style="text-align: left;" href="#">Descargar PDF</a></li>
                        <li><a style="text-align: left;" href="#">Descargar Excel</a></li>
                      </ul>
                    </div>
                  </td>
                  <td><button style="margin-top: -7px;" type="button" class="glyphicon glyphicon-edit btn btn-warning"></button></td>
                  <td><button style="margin-top: -7px;" type="button" class="glyphicon glyphicon-remove btn btn-danger"></button></td>
                </tr>
              </tbody>
            </table>
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