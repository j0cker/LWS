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
var comillas = "'";
var comilla = "'";
var hoja = 1;
$(document).ready(function() {
  contCat2();
  getCategorias(hoja);
});
function buscar(){
  if($("#palabra").val()){
    $.ajax({url:   "scripts/buscar-cvs.php",
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
              html+='<th style="text-align: left;">Talento</th>';
              html+='<th style="text-align: left;">Categoría</th>';
              html+='<th style="text-align: left;">Estado</th>';
              html+='<th style="text-align: left;">Hora/Tipo</th>';
              html+='<th style="text-align: left;">Publicación</th>';
						  html+='<th></th>';
						  html+='<th></th>';
              html+='<th></th>';
						html+='</tr>';
					  html+='</thead>';
					  html+='<tbody>';
					  for(var x=0; x<obj.id.length; x++){
						html+='<tr>';
						  html+='<td>'+obj.id[x]+'</td>';
              html+='<td>'+obj.nombreCompleto[x]+'</td>';
              html+='<td>'+obj.categoria[x]+'</td>';
              html+='<td>'+obj.estado[x]+'</td>';
              html+='<td>'+obj.tipoTiempo[x]+'</td>';
              html+='<td>'+obj.fecha[x]+'</td>';
              html+='<td>';
                html+='<div class="dropdown">';
                  html+='<button style="margin-top: -7px;" class="glyphicon glyphicon-share btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">';
                    html+='<span class="caret"></span>';
                  html+='</button>';
                  html+='<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">';
                    html+='<li><a style="text-align: left;" href="reporte_pdf.php?id='+obj.id[x]+'">Descargar PDF</a></li>';
                    html+='<li><a style="text-align: left;" href="reporte_excel.php?id='+obj.id[x]+'">Descargar Excel</a></li>';
                  html+='</ul>';
                html+='</div>';
              html+='</td>';
						  html+='<td><button onclick="window.location='+comilla+'nuevo-cvs.php?id='+obj.id[x]+''+comilla+';" style="margin-top: -7px;" type="button" class="glyphicon glyphicon-edit btn btn-warning"></button></td>';
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
          url:   "scripts/del-cvs.php",
        type:  'POST',
        success:  function (response) {
          obj = JSON.parse(response);
          if(obj.true=="true"){
            getCategorias(hoja);
            hoja = 1;
            contCat2();
            alert("CV Eliminado");
          } else {
            alert("CV No Eliminado");
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
					url:   "scripts/get-cvs.php",
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
              html+='<th style="text-align: left;">Talento</th>';
              html+='<th style="text-align: left;">Categoría</th>';
              html+='<th style="text-align: left;">Estado</th>';
              html+='<th style="text-align: left;">Hora/Tipo</th>';
              html+='<th style="text-align: left;">Publicación</th>';
						  html+='<th></th>';
						  html+='<th></th>';
              html+='<th></th>';
						html+='</tr>';
					  html+='</thead>';
					  html+='<tbody>';
					  for(var x=0; x<obj.id.length; x++){
						html+='<tr>';
						  html+='<td>'+obj.id[x]+'</td>';
              html+='<td>'+obj.nombreCompleto[x]+'</td>';
              html+='<td>'+obj.categoria[x]+'</td>';
              html+='<td>'+obj.estado[x]+'</td>';
              html+='<td>'+obj.tipoTiempo[x]+'</td>';
              html+='<td>'+obj.fecha[x]+'</td>';
              html+='<td>';
                html+='<div class="dropdown">';
                  html+='<button style="margin-top: -7px;" class="glyphicon glyphicon-share btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">';
                    html+='<span class="caret"></span>';
                  html+='</button>';
                  html+='<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">';
                    html+='<li><a style="text-align: left;" href="reporte_pdf.php?id='+obj.id[x]+'">Descargar PDF</a></li>';
                    html+='<li><a style="text-align: left;" href="reporte_excel.php?id='+obj.id[x]+'">Descargar Excel</a></li>';
                  html+='</ul>';
                html+='</div>';
              html+='</td>';
						  html+='<td><button onclick="window.location='+comilla+'nuevo-cvs.php?id='+obj.id[x]+''+comilla+';" style="margin-top: -7px;" type="button" class="glyphicon glyphicon-edit btn btn-warning"></button></td>';
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
                  <span style="font-size: 15px;" class="fa fa-briefcase"></span> Administrar CV's
                </a>
            </div>
        </div>
    </div>
    <div style="margin-top: 10px;" class="row">
        <div class="col-md-12 text-center">
            <div style="" class="col-md-12">
              <button style="background-color: #0277BD; border-color: #0277BD; width: 200px;" type="button" class="btn btn-success"><span style="font-size: 25px;" class="fa fa-briefcase"></span><br />CV's Nuevos en el Mes<br /><span id="contMcvs"></span<</button>
            </div>
        </div>
    </div><!--row-->
    
    <div style="margin-top: 10px;" class="row">
        <div class="col-md-12 text-center">
            <div style="" class="col-md-6">
              <a href="reporte_excel.php">
                <button style="margin-top: 10px;" type="button" class="btn btn-warning">Descargar Base de CV's en Excel</button>
              </a>
            </div>
            <div style="" class="col-md-6">
              <a href="reporte_pdf.php">
                <button style="margin-top: 10px;" type="button" class="btn btn-info">Descargar Base de CV's en PDF</button>
              </a>
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
            <a href="nuevo-cvs.php">
              <button type="button" class="btn btn-success"><span style="padding-right: 10px;" class="fa fa-plus"></span>Nuevo CV</button>
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
</body>
<html>
<?PHP
} else {
  header("Location: login.php");
}
?>