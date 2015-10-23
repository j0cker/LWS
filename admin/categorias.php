<?PHP 
require_once('session.php');
include '../global.php';
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
getCategorias(hoja);
function adelanteButton(){
  if(hoja<$('#contDes').html()){
    console.log("siguiente hoja");
    hoja = hoja +1;
    getCategorias(hoja);
    contCat();
  } else {
    alert("Fin de la lista");
  }
}
function atrasButton(){
  if(hoja!=1){
    console.log("Anterior hoja");
    hoja = hoja -1;
    getCategorias(hoja);
    $('#contAnt').html(hoja);
  } else {
    alert("Inicio de la Lista");
  }
}
function buscar(){
  if($("#palabra").val()){
    $.ajax({url:   "scripts/buscar-categorias.php",
        data: { buscar:$("#palabra").val() },
        type:  'GET',
        success:  function (response) {
          obj = JSON.parse(response);
          if(obj.true!="false"){
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
            alert("No hay Coincidencias");
          }
        }, error: function (response){
          alert("ERROR inténtelo de nuevo más tarde");
        }
    });
  } else {
    contCat();
    getCategorias(hoja);
  }
}
function contCat(){
	$.ajax({url:   "scripts/get-cont-categorias.php",
			type:  'GET',
			success:  function (response) {
			  obj = JSON.parse(response);
			  if(obj.true!="false"){
          if(obj.cont<2){
            $("#atras").css("display","none");
            $('#adelante').css("display","none");
          } else {
            if(hoja!=1){
              $("#atras").css("display","block");
              $('#atras').attr("onclick","atrasButton();");
            }
            $('#adelante').css("display","block");
            $('#adelante').attr("onclick","adelanteButton();"); 
          }
          $('#contDes').html(parseInt(obj.cont));
          $('#contAnt').html(hoja);
			  } else {
			    alert("Categoría No Eliminada");
			  }
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
}
function modCat(id, nombre){
  $("#editar").modal("show");
  $("#categoriaEditar2").val(nombre);
  $("#editar345").attr("onclick","editarCategoria("+id+");");
}
function eliminarCat(id){
	$.ajax({data: { id:id },
		    url:   "scripts/del-categoria.php",
			type:  'POST',
			success:  function (response) {
			  obj = JSON.parse(response);
			  if(obj.true=="true"){
				  getCategorias(hoja);
			    hoja = 1;
          contCat();
			    alert("Categoría Eliminada");
			  } else {
			    alert("Categoría No Eliminada");
			  }
        contCat();
        getCategorias(hoja);
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
}
function getCategorias(hoja){
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
						  html+='<td><button onclick="modCat('+comillas+''+obj.id[x]+''+comillas+', '+comillas+''+obj.cat[x]+''+comillas+');" style="margin-top: -7px;" type="button" class="glyphicon glyphicon-edit btn btn-warning"></button></td>';
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
function editarCategoria(id){
  if(!$("#categoriaEditar2").val()){
    alert("Llenar Nombre de la categoría");
  } else {
	$.ajax({      data: { categoria:$("#categoriaEditar2").val(), option:"2", id:id },
					url:   "scripts/alta-categoria.php",
			type:  'POST',
			success:  function (response) {
			  alert("Categoría Editada");
			  hoja = 1;
        getCategorias(hoja);
        contCat();
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
  }
}
function altaCategoria(){
  if(!$("#categoria").val()){
    alert("Llenar Nombre de la categoría");
  } else {
	$.ajax({data: { categoria:$("#categoria").val(), option:"1" },
					url:   "scripts/alta-categoria.php",
			type:  'POST',
			success:  function (response) {
			  alert("Categoría Agregada");
			  hoja = 1;
        getCategorias(hoja);
        contCat();
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
              <input class="form-control" type="text" id="palabra" onkeyup="buscar();" placeholder="Buscar: ">
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
                  <a id="atras" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a id="contAnt" href="#">1</a></li>
                <li><a href="#">de</a></li>
                <li><a id="contDes" href="#">1</a></li>
                <li>
                  <a id="adelante" href="#" aria-label="Next">
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

<!-- arrayUsersModal -->
  <div class="modal modal-signup" id="editar" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h5 style="text-align: center; color: red;" id="arrayUsersModalLabel" class="modal-title text-center">Editar Categoría</h5>
                  <p></p>
              </div>
              <div id="modal-body" class="modal-body" style="background-color: #e9eaec; height: 450px; overflow-y: auto;">
                <div style="text-align: center;" id="arrayUsers">
                  <div style="padding-top: 10px; box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12); background-color: #FFFFFF;" class="row">
                    <div class="col-xs-12">
                      <div style="padding-top: 40px; padding-bottom: 40px;" class="row">
                        <div class="col-md-3">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-md-6">
                          <div class="input-group">
                            <input id="categoriaEditar2" type="text" class="form-control" placeholder="Editar categoría">
                            <span class="input-group-btn">
                              <button id="editar345" onclick="editarCategoria();" class="btn btn-default" type="button">Editar</button>
                            </span>
                          </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-md-3">
                        </div><!-- /.col-lg-6 -->
                      </div><!-- /.row -->
                    </div><!--col-xs-12-->
                  </div><!--row-->  
                   
                </div>
                  <!--<div class="divider"><span>Or</span></div>--->

              </div><!--//modal-body-->
              <!--
              <div class="modal-footer">
                  <p>Already have an account? <a class="login-link" id="login-link" href="http://themes.3rdwavemedia.com/tempo/1.4/#">Log in</a></p>                    
              </div>--><!--//modal-footer-->
          </div><!--//modal-content-->
      </div><!--//modal-dialog-->
  </div><!--//modal-->
 
</body>
<html>
<?PHP
} else {
  header("Location: login.php");
}
?>