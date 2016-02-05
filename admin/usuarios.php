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
  var comilla = "'";
  var hoja = 1;
  var priv = "<?PHP echo $_SESSION['priv']; ?>";
</script>
<script>
function bloquear(id){
   $.ajax({url: "scripts/bloquear.php",
        type:  'POST',
        data: { id:id },
        success:  function (response) {
          alert("Usuario bloqueado");
          contCat2();
          getCategorias(hoja);
        }, error: function (response){
          alert("ERROR inténtelo de nuevo más tarde");
        }
    }); 
}
function activar(id){
   $.ajax({url: "scripts/activar.php",
        type:  'POST',
        data: { id:id },
        success:  function (response) {
          alert("Usuario activado");
          contCat2();
          getCategorias(hoja);
        }, error: function (response){
          alert("ERROR inténtelo de nuevo más tarde");
        }
    }); 
}
function agregarUser(id, option){
  if(!$("#username").val()){
    alert("ERROR: escribe nombre de usuario");
  } else if(!$("#password").val()){
    alert("ERROR: escribe una contraseña");
  } else if($("#password").val()!=$("#password2").val()){
    alert("ERROR: las contraseñas no son las mismas");
  } else {
    $.ajax({url: "scripts/alta-usuarios.php",
        type:  'POST',
        data: {user:$("#username").val(), passwd:$("#password").val(), priv:$("#privilegios").val(), id:id, option:option},
        success:  function (response) {
          alert("Usuario nuevo dado de alta");
          contCat2();
          getCategorias(hoja);
        }, error: function (response){
          alert("ERROR inténtelo de nuevo más tarde");
        }
    }); 
    $("#editar").modal("hide");
  }
}
function abrirModal(id, option){
  $("#editar").modal("show");
  if(option==1){
    $("#arrayUsersModalLabel").html("Nuevo Usuario");
    var html = '';
    html += '<div style="padding-top: 10px; box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12); background-color: #FFFFFF;" class="row">';
      html += '<div class="col-xs-12">';
      html += '<div class="form-group form-group-default ">';
          html += '<label>Da de alta un nuevo usuario:</label>';
          html += '<br /><br /><label style="text-align: left; float: left;">Esribe el nombre de usuario:</label><input type="text" id="username" style="" placeholder="Nombre de Usuario" type="email" class="form-control"></input>';
          html += '<br /><br /><label style="text-align: left; float: left;">Escribe el Password:</label><input type="password" id="password" style="" placeholder="Password" type="email" class="form-control"></input>';
          html += '<br /><br /><label style="text-align: left; float: left;">Repite el Password:</label><input type="password" id="password2" style="" placeholder="Password" type="email" class="form-control"></input>';
          html += '<br /><br /><label style="text-align: left; float: left;">Selecciona Privilegios:</label><select class="form-control" id="privilegios"><!--<option value="administrador">administrador</option>--><option value="superUsuario">superUsuario</option><option value="monitor">monitor</option></select>';
          html += '<br /><br /><button onclick="agregarUser('+comilla+''+comilla+','+comilla+'1'+comilla+');" type="button" class="btn btn-success">Agregar</button>';
      html += '</div>';
      html += '</div><!--col-xs-12-->';
    html += '</div><!--row-->';
    $("#arrayUsers").html(html);
  } else if(option==2){
    $("#arrayUsersModalLabel").html("Editar Usuario");
    $.ajax({url: "scripts/edit-usuarios.php",
        type:  'GET',
        data: {id:id},
        success:  function (response) {
          obj = JSON.parse(response);
          var html = '';
              html += '<div style="padding-top: 10px; box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12); background-color: #FFFFFF;" class="row">';
                html += '<div class="col-xs-12">';
                html += '<div class="form-group form-group-default ">';
                    html += '<label>Da de alta un nuevo usuario:</label>';
                    html += '<br /><br /><label style="text-align: left; float: left;">Esribe el nombre de usuario:</label><input value="'+obj.user+'" type="text" id="username" style="" placeholder="Nombre de Usuario" type="email" class="form-control"></input>';
                    html += '<br /><br /><label style="text-align: left; float: left;">Escribe el Password:</label><input type="password" id="password" style="" placeholder="Password" type="email" class="form-control"></input>';
                    html += '<br /><br /><label style="text-align: left; float: left;">Repite el Password:</label><input type="password" id="password2" style="" placeholder="Password" type="email" class="form-control"></input>';
                    html += '<br /><br /><label style="text-align: left; float: left;">Selecciona Privilegios:</label><select class="form-control" id="privilegios"><option value="'+obj.priv+'" selected>'+obj.priv+'</option><!--<option value="administrador">administrador</option>--><option value="superUsuario">superUsuario</option><option value="monitor">monitor</option></select>';
                    html += '<br /><br /><button onclick="agregarUser('+comilla+''+obj.id+''+comilla+','+comilla+'2'+comilla+');" type="button" class="btn btn-success">Agregar</button>';
                html += '</div>';
                html += '</div><!--col-xs-12-->';
              html += '</div><!--row-->';
              $("#arrayUsers").html(html);
        }, error: function (response){
          alert("ERROR inténtelo de nuevo más tarde");
        }
    }); 
  }
}
</script>
<script>
  /*contadores*/
  contMVaca();
  function contMVaca(){
	$.ajax({url:   "scripts/get-cont-Mcvs.php",
			type:  'GET',
			success:  function (response) {
			  obj = JSON.parse(response);
			  if(obj.true!="false"){
          console.log(obj.TContCat);
          $("#contMcvs").html(obj.TContCat);
			  } else {
			    alert("Error Contando CVS");
			  }
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
}
</script>
<script>
$(document).ready(function() {
  contCat2();
  getCategorias(hoja);
});
function buscar(){
  if($("#palabra").val()){
    $.ajax({url:   "scripts/buscar-usuarios.php",
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
              html+='<th style="text-align: left;">ID</th>';
              html+='<th style="text-align: left;">Usuario</th>';
              html+='<th style="text-align: left;">Privilegios</th>';
              html+='<th style="text-align: left;">Status</th>';
              html+='<th style="text-align: left;">Creación</th>';
						  html+='<th></th>';
						  html+='<th></th>';
              html+='<th></th>';
						html+='</tr>';
					  html+='</thead>';
					  html+='<tbody>';
					  for(var x=0; x<obj.id.length; x++){
						html+='<tr>';
						  html+='<td>'+obj.id[x]+'</td>';
              html+='<td>'+obj.user[x]+'</td>';
              html+='<td>'+obj.priv[x]+'</td>';
              html+='<td>'+obj.status[x]+'</td>';
              html+='<td>'+obj.fecha[x]+'</td>';
              if(obj.user[x]!="manlio"){
                html+='<td>';
                  html+='<div class="dropdown">';
                    html+='<button style="margin-top: -7px;" class="fa fa-lock btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">';
                      html+='<span class="caret"></span>';
                    html+='</button>';
                    html+='<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">';
                      html+='<li><a style="cursor: pointer; text-align: left;" href="scripts/bloquear.php?id='+obj.id[x]+'">Bloquear</a></li>';
                      html+='<li><a style="cursor: pointer; text-align: left;" href="scripts/activar.php?id='+obj.id[x]+'">Activar</a></li>';
                    html+='</ul>';
                  html+='</div>';
                html+='</td>';
                html+='<td><button onclick="abrirModal('+comillas+''+obj.id[x]+''+comillas+', '+comillas+'2'+comillas+');" style="margin-top: -7px;" type="button" class="glyphicon glyphicon-edit btn btn-warning"></button></td>';
                html+='<td><button onclick="eliminarCat('+comillas+''+obj.id[x]+''+comillas+');" style="margin-top: -7px;" type="button" class="glyphicon glyphicon-remove btn btn-danger"></button></td>';
              } else {
                html+='<td></td><td></td><td></td>';
              }
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
    contCat2();
    getCategorias(hoja);
  }
}
function adelanteButton(){
  if(hoja<$('#contDes').html()){
    console.log("siguiente hoja");
    hoja = hoja +1;
    getCategorias(hoja);
    contCat2();
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
function eliminarCat(id){
  confirmar=confirm("¿Deseas Eliminar?"); 
  if (confirmar){
    
    $.ajax({data: { id:id },
            url:   "scripts/del-usuarios.php",
            type:  'POST',
            success:  function (response) {
              obj = JSON.parse(response);
              if(obj.true=="true"){
                getCategorias(hoja);
                hoja = 1;
                contCat2();
                alert("Usuario Eliminado");
              } else {
                alert("Usuario No Eliminado");
              }
              contCat2();
              getCategorias(hoja);
            }, error: function (response){
              alert("ERROR inténtelo de nuevo más tarde");
            }
      });
  }
}
function getCategorias(hoja){
	$.ajax({data: { hoja:hoja },
					url:   "scripts/get-usuarios.php",
			type:  'GET',
			success:  function (response) {
		      obj = JSON.parse(response);
			  if(obj.true=="true"){
				  var html = '';
				  html+='<center>';
					html+='<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">';
					  html+='<thead>';
						html+='<tr>';
              html+='<th style="text-align: left;">ID</th>';
              html+='<th style="text-align: left;">Usuario</th>';
              html+='<th style="text-align: left;">Privilegios</th>';
              html+='<th style="text-align: left;">Status</th>';
              html+='<th style="text-align: left;">Creación</th>';
						  html+='<th></th>';
						  html+='<th></th>';
              html+='<th></th>';
						html+='</tr>';
					  html+='</thead>';
					  html+='<tbody>';
					  for(var x=0; x<obj.id.length; x++){
						html+='<tr>';
						  html+='<td>'+obj.id[x]+'</td>';
              html+='<td>'+obj.user[x]+'</td>';
              html+='<td>'+obj.priv[x]+'</td>';
              html+='<td>'+obj.status[x]+'</td>';
              html+='<td>'+obj.fecha[x]+'</td>';
              if(obj.user[x]!="manlio"){
                html+='<td>';
                  html+='<div class="dropdown">';
                    html+='<button style="margin-top: -7px;" class="fa fa-lock btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">';
                      html+='<span class="caret"></span>';
                    html+='</button>';
                    html+='<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">';
                      html+='<li><a style="cursor: pointer; text-align: left;" onclick="bloquear('+obj.id[x]+');">Bloquear</a></li>';
                      html+='<li><a style="cursor: pointer; text-align: left;" onclick="activar('+obj.id[x]+');">Activar</a></li>';
                    html+='</ul>';
                  html+='</div>';
                html+='</td>';
                html+='<td><button onclick="abrirModal('+comillas+''+obj.id[x]+''+comillas+', '+comillas+'2'+comillas+');" style="margin-top: -7px;" type="button" class="glyphicon glyphicon-edit btn btn-warning"></button></td>';
                html+='<td><button onclick="eliminarCat('+comillas+''+obj.id[x]+''+comillas+');" style="margin-top: -7px;" type="button" class="glyphicon glyphicon-remove btn btn-danger"></button></td>';
              } else {
                html+='<td></td><td></td><td></td>';
              }
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
function contCat2(){
	$.ajax({url:   "scripts/get-cont-cvs.php",
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
			    alert("CV No Eliminada");
			  }
			}, error: function (response){
			  alert("ERROR inténtelo de nuevo más tarde");
			}
	});
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
                  <span style="font-size: 15px;" class="fa fa-user"></span> Usuarios
                </a>
            </div>
        </div>
    </div>
    <!--
    <div style="margin-top: 10px;" class="row">
        <div class="col-md-12 text-center">
            <div style="" class="col-md-12">
              <button style="background-color: #0277BD; border-color: #0277BD; width: 200px;" type="button" class="btn btn-success"><span style="font-size: 25px;" class="fa fa-briefcase"></span><br />CV's Nuevos en el Mes<br /><span id="contMcvs"></span<</button>
            </div>
        </div>
    </div>row-->
    
    
    <div style="margin-top: 20px;" class="row text-center">
      <div class="col-md-1"></div>
      <div style="background-color: #AD1457; color: white;" class="col-md-10 panel">
      <!-- Default panel contents -->
      <div class="panel-heading"><span style="font-size: 20px; padding-right: 10px;" class="fa fa-list-ul"></span> Lista de Usuarios</div>
      <div style="color: black; background-color: #FFF;" class="panel-body text-left">
        <div class="row">
          <div class="col-md-3">
            <a onclick="abrirModal('','1');">
              <button type="button" class="btn btn-success"><span style="padding-right: 10px;" class="fa fa-plus"></span>Nuevo Usuario</button>
            </a>
          </div>
          <div class="col-md-6">
            <div class="input-group">
              <span style="top: 0px;" class="input-group-addon glyphicon glyphicon-search" id="basic-addon1"></span>
              <input style="" class="form-control" type="text" id="palabra" onkeyup="buscar();" placeholder="Buscar: ">
            </div>
          </div>
          <div class="col-md-3">
          </div>
        </div><!--row-->
        <div style="margin-top: 20px;" class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-10" id="cats">
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