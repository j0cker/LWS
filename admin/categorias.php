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
<script>
var comillas = "'";
var hoja = 1;
contCat();
function contCat(){
	$.ajax({url:   "scripts/get-cont-categorias.php",
			type:  'POST',
			success:  function (response) {
			  obj = JSON.parse(response);
			  if(obj.true!="false"){
				console.log(obj.cont);
			  } else {
			    alert("Categoría No Eliminada");
			  }
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
}
getCategorias();
function eliminarCat(id){
	$.ajax({data: { id:id },
		    url:   "scripts/del-categoria.php",
			type:  'POST',
			success:  function (response) {
			  obj = JSON.parse(response);
			  if(obj.true=="true"){
				getCategorias();
			    hoja = 1;
			    alert("Categoría Eliminada");
			  } else {
			    alert("Categoría No Eliminada");
			  }
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
}
function getCategorias(){
	$.ajax({      data: { hoja:hoja },
					url:   "scripts/get-categorias.php",
			type:  'GET',
			success:  function (response) {
		      obj = JSON.parse(response);
			  if(obj.true=="true"){
				  var html = '';
				  html+='<center>';
					html+='<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">';
					  html+='<thead>';
						html+='<tr>';
						  html+='<th style="text-align: left;">Categorías</th>';
						  html+='<th></th>';
						  html+='<th></th>';
						html+='</tr>';
					  html+='</thead>';
					  html+='<tbody>';
					  for(var x=0; x<obj.cat.length; x++){
						html+='<tr>';
						  html+='<td>'+obj.cat[x]+'</td>';
						  html+='<td><button onclick="modCat();" style="margin-top: -7px;" type="button" class="glyphicon glyphicon-edit btn btn-warning"></button></td>';
						  html+='<td><button onclick="eliminarCat('+comillas+''+obj.id[x]+''+comillas+');" style="margin-top: -7px;" type="button" class="glyphicon glyphicon-remove btn btn-danger"></button></td>';
						html+='</tr>';
					  }
					  html+='</tbody>';
					html+='</table></center>';
					$("#cats").html(html);
			  } else {
				$("#cats").html('ERROR');
			  }
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
}
function altaCategoria(){
  if(!$("#categoria").val()){
    alert("Llenar Nombre de la categoría");
  } else {
	$.ajax({      data: { categoria:$("#categoria").val() },
					url:   "scripts/alta-categoria.php",
			type:  'POST',
			success:  function (response) {
			  alert("Categoría Agregada");
			  getCategorias();
			  hoja = 1;
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
  }
}
</script>
<body>
<?PHP
require_once('desktop/menu.php');
?>
  <main class="mdl-layout__content">
    <div class="row">
        <div class="col-md-12 text-center page-content">
            <div style="min-height: 35px;" class="col-md-12 mdl-shadow--2dp">
                <a style="color: #AD1457; font-weight: bold;" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  <span style="font-size: 15px; padding-right: 10px;" class="fa fa-table"></span>Categorías
                </a>
            </div>
        </div>
    </div>

    
    <div style="padding-top: 40px;" class="row">
      <div class="col-md-3">
      </div><!-- /.col-lg-6 -->
      <div class="col-md-6">
        <div class="input-group">
          <input id="categoria" type="text" class="form-control" placeholder="Agregar una categoría">
          <span class="input-group-btn">
            <button onclick="altaCategoria();" class="btn btn-default" type="button">Agregar</button>
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-md-3">
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    
    <div style="margin-top: 20px;" class="row text-center">
      <div class="col-md-1"></div>
      <div style="background-color: #AD1457; color: white;" class="col-md-10 panel">
      <!-- Default panel contents -->
      <div class="panel-heading">Categorías Existentes</div>
      <div style="color: black; background-color: #FFF;" class="panel-body text-left">
        <div class="row">
          <div class="col-md-3">
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
          <div class="col-md-4">
          </div>
          <div id="cats" class="col-md-4">
            
          </div>
        </div>
        <div class="col-md-4">
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
                <li><a id="contAnt" href="#">1</a></li>
                <li><a href="#">de</a></li>
                <li><a id="contDes" href="#">2</a></li>
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