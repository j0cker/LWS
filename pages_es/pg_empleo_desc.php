
<?PHP
?>
<!DOCTYPE HTML>
<html ng-app="app">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/estilos_lws_hijos.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <script src="js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link href="bootstrap/css/bootstrap-tour.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap-tour.min.js"></script>
    <link href="bootstrap/css/bootstrap-tour-standalone.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap-tour-standalone.min.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=100">


    <!--Bootstrap-->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script>
        var idReg = <?PHP echo $_GET["id"]; ?>
    </script>

    <!--Angular-->
    <script src="../angular/angular.min.js"></script>
    <script src="../angular/angular-sanitize.js"></script>
    <script src="../angular/lib/title.js"></script>
    <script src="../angular/lib/factory.js"></script>
    <script src="../angular/lib/empleo.js"></script>
    <script src="../angular/lib/vacante.js"></script>
    
    <script src="../js/escribir.js"></script>
    
    <script>
       function abrirSubirVacante(){
         $("#notificacionesAbrir").modal("show");
       }
    </script>

    <meta property='og:image' content='http://lws.mx/images/lws_solicita.png'/>
    
    
    <script>
      
       function enviar123() {
         console.log("Form2");
         
          if(!$("#nombreCompleto2").val()){
            alert("Rellenar el campo Nombre Completo");
          } else if(!$("#telefono2").val()){
            alert("Rellenar el campo Teléfono");
          } else if(!$("#email2").val()){
            alert("Rellenar el campo Email");
          } else if(!$("#tituloProfesional2").val()){
            alert("Rellenar el campo Titulo Profesional");
          } else if(!$("#oferta2").val()){
            alert("Rellenar el campo Oferta");
          } else if(!$("#fileImage").val()){
            alert("Rellenar el campo File");
          } else {
            alert(urlUpload);
            $.ajax({data: { id_cat:'Sin Categoria',
                            nombreCompleto:$("#nombreCompleto2").val(),
                            telefono:$("#telefono2").val(),
                            email:$("#email2").val(),
                            oferta:$("#oferta2").val(),
                            tituloProfesional:$("#tituloProfesional2").val(),
                            comentarios:$("#comentarios2").val(),
                            option:1,
                            fileImage:urlUpload
                          },
                    url:   "../admin/scripts/alta-cvs.php",
                    type:  'POST',
                success:  function (response) {
                  alert("CV Agregado");
                  window.location = "pg_info_enviada.html";
                }, error: function (response){
                  alert("ERROR inténtelo de nuevo más tarde");
                }
            });
          }
       }
       function enviarForm123() {
         console.log("Form");
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
          } else if(!$("#mes1").val()){
            alert("Rellenar el campo mes");
          } else if(!$("#ano1").val()){
            alert("Rellenar el campo año");
          } else if(!$("#mes2").val()){
            alert("Rellenar el campo mes");
          } else if(!$("#ano2").val()){
            alert("Rellenar el campo año");
          } else if(!$("#descripcionAnteriores").val()){
            alert("Rellenar el campo de Descripcion Anteriores");
          } else {
            $.ajax({data: { id_cat:'Sin Categoria',
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
                            datepicker:"1-"+ $("#mes1").val() + "-" + $("#ano1").val(),
                            datepicker2:"1-"+ $("#mes2").val() + "-" + $("#ano2").val(),
                            trabajaActualmente:$("#trabajaActualmente").val(),
                            descripcionAnteriores:$("#descripcionAnteriores").val(),
                            vacante1:$("#vacante1").val(),
                            vacante2:$("#vacante2").val(),
                            vacante3:$("#vacante3").val(),
                            vacante4:$("#vacante4").val(),
                            vacante5:$("#vacante5").val(),
                            vacante6:$("#vacante6").val(),
                            comentarios:$("#comentarios").val(),
                            option:1
                          },
                    url:   "../admin/scripts/alta-cvs.php",
                    type:  'POST',
                success:  function (response) {
                  alert("CV Agregado");
                  window.location = "pg_info_enviada.html";
                }, error: function (response){
                  alert("ERROR inténtelo de nuevo más tarde");
                }
            });
          }
       }
    </script>
    
    
    <script type="text/javascript">
    function MM_swapImgRestore() { //v3.0
    var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
    }
    function MM_preloadImages() { //v3.0
    var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
        var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
        if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
    }

    function MM_findObj(n, d) { //v4.01
    var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
        d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
    if(!x && d.getElementById) x=d.getElementById(n); return x;
    }

    function MM_swapImage() { //v3.0
    var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
    if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
    }
    </script>
    <title ng-controller="titleCtrl">LWS | EMPLEO</title>
</head>
<body ng-controller="vacanteCtrl" bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('img/sub-menu_serv_y_sol-ovr_02.png','img/sub-menu_serv_y_sol-ovr_04.png','img/sub-menu_serv_y_sol-ovr_06.png','img/sub-menu_serv_y_sol-ovr_08.png','img/ss_img_bt_ojo-ovr-07.png')">




<div>
  <table align="center" width="1024" height="44px" border="0" cellspacing="0" cellpadding="0" background="img/body_bckg-02.png">
  <tr>
    <td align="center" valign="bottom" background="">
    
    <div style="width:1022px; height:48px; background-image:url(img/header_bckg_04.jpg)">
    
    
     <div style="padding-top:12p
     x;">
      <!-- ImageReady Slices (sub-menu_serv_y_sol.ai) -->
      <table width="892" height="31" border="0" align="center" cellpadding="0" cellspacing="0" id="Tabla_01">
        <tr>
          <td rowspan="2" align="center" valign="middle"><img src="img/sub-menu_serv_y_sol-nm_01.png" width="193" height="31" alt=""></td>
          <td rowspan="2" align="center" valign="middle"> <a href="pg_servicios.html" target="_self" onMouseOver="MM_swapImage('bttn_1','','img/sub-menu_serv_y_sol-ovr_02.png',1)" onMouseOut="MM_swapImgRestore()"><img src="img/sub-menu_serv_y_sol-nm_02.png" alt="SERVICIOS" name="bttn_1" width="120" height="31" border="0"></a></td>
          <td rowspan="2" align="center" valign="middle"><img src="img/sub-menu_serv_y_sol-nm_03.png" width="12" height="31" alt=""></td>
          <td rowspan="2" align="center" valign="middle"><a href="pg_soluciones.html" target="_self" onMouseOver="MM_swapImage('bt_soluciones','','img/sub-menu_serv_y_sol-ovr_04.png',1)" onMouseOut="MM_swapImgRestore()"><img src="img/sub-menu_serv_y_sol-nm_04.png" alt="SOLUCIONES" name="bt_soluciones" width="122" height="31" border="0"></a></td>
          <td rowspan="2" align="center" valign="middle"><img src="img/sub-menu_serv_y_sol-nm_05.png" width="10" height="31" alt=""></td>
          <td align="center" valign="middle"><a href="pg_empleo.html" target="_self" onMouseOver="MM_swapImage('bt_secc_empleo','','img/sub-menu_serv_y_sol-ovr_06.png',1)" onMouseOut="MM_swapImgRestore()"><img src="img/sub-menu_serv_y_sol-nm_06.png" alt="EMPLEO" name="bt_secc_empleo" width="88" height="30" border="0"></a></td>
          <td align="center" valign="middle"><img src="img/sub-menu_serv_y_sol-nm_07.png" width="11" height="30" alt=""></td>
          <td rowspan="2" align="center" valign="middle"><a href="pg_envia_cv.html" target="_self" onMouseOver="MM_swapImage('bt_envia_cv','','img/sub-menu_serv_y_sol-ovr_08.png',1)" onMouseOut="MM_swapImgRestore()"><img src="img/sub-menu_serv_y_sol-nm_08.png" alt="ENVIA TU C.V." name="bt_envia_cv" width="139" height="31" border="0"></a></td>
          <td rowspan="2" align="center" valign="middle"><img src="img/sub-menu_serv_y_sol-nm_09.png" width="197" height="31" alt=""></td>
        </tr>
       
      </table>
      <!-- End ImageReady Slices -->
    </div>
    
    
    </div></td>
  </tr>
</table>

</div>



<div style="z-index:1">

<table class="tb_bckgnd_contenedor" width="1024px" height="100%" align="center" cellpadding="0" cellspacing="0">


 	<tr>
    	<td height="192" align="center" valign="top">
        	<table width="893px" height="192" align="center">
    			<tr>
          		<td colspan="3" align="center" valign="middle" height="15px;"> <img style="padding-bottom:0px; padding-top:15px;" src="img/line_separador-02.png" height="2px"></td>
   				 </tr>
        
<tr>
	<td width="893px" height="62">
    
 <!--INICIA TABLA DE SERVICIOS
    -->
    
    <div class="col-md-12">

    <div style="z-index:10; text-align:center; box-shadow: 0 0 15px black;">
      
      <div style="height:65px; background:#db57af;">
        <div style="z-index:11; padding-top:12px;">
          <div class="col-md-2">
            <a href="pg_empleo.html">
              <img style="width:120px; cursor:pointer;" src="img/back.png"></img>
            </a>
          </div>
          <div class="col-md-10">
          <a style="color:#b7dbf0; font-family: oswaldregular; font-size: 20px; margin: 0; padding-top: 15px; text-align: center;">DATOS DE LA OFERTA | No. CLAVE: </a>
          <a style="color:#ffffff; font-family: oswaldregular; font-size: 25px; padding-left: 5px; padding-right:150px">{{vacanteId.id}}</a>
          </div>
        </div>
      </div>

      <div style="height:45px; background:#e2dbe0;">
        <div style="z-index:11; padding-top:5px;">
          <a style="color:#b2b2b2; font-family: oswaldregular; font-size: 30px; text-align: center;">{{vacanteId.categoria}}</a>
        </div>
      </div>

      <div class="col-md-12" style="height:65px; background:#e2dbe0;">

        <div class="col-md-1">
        </div>

        <div class="col-md-1" style="height: 70px; padding-left:80px;">
          <img style="width:35px; padding-top:15px;" src="img/ubicacion.png"></img>
        </div> 
        <div class="col-md-2" style="height: 70px; padding:0;">
          <p style="font-family: oswaldregular; color: #787878; font-size: 15px; padding-top:22px;">{{vacanteId.estado}}</p> 
        </div> 

        <div class="col-md-3" style="height: 70px; padding:15px;">
          <button type="submit" style="background-color:#DA57AD; height: 35px; width:175px; color:#fff; font-family: oswaldregular; cursor:pointer;">{{vacanteId.tipoTiempo}}</button>
        </div>

        <div class="col-md-4" style="height: 70px; padding-top: 20px; padding-right: 55px;">
          <a class="fa fa-calendar" style="color: #787878; font-size: 15px;"></a>
          <a style="font-family: oswaldregular; color: #787878; font-size: 15px; padding-top:22px;">Publicado: {{vacanteId.fecha}}</a>
        </div>

        <div class="col-md-1">
        </div>
 
      </div>

   </div>

    </div>

    <div class="col-md-12" style="padding-top: 12px;">
      <div class="col-md-1"></div>
      <div class="col-md-10" style="background:#87c3e7; height:10px; width:863px;"></div>
      <div class="col-md-1"></div>
    </div>
    
    <br>

    <div class="col-md-12" style="background-color: #fff; padding:0;">
      <div class="col-md-9" style="background-color: #fff;">

        <p style="color:#b2b2b2; font-family: oswaldregular; font-size: 24px; padding-top: 20px;">DESCRIPCIÓN</p>
        <hr style="border-width: 2px; margin:0; border-color: #666666;">
        <p style="color:#808080; font-family: oswaldregular; font-size: 18px; padding-top: 8px;">{{vacanteId.descripcion}}</p>

        <br>

        <p style="color:#b2b2b2; font-family: oswaldregular; font-size: 24px; padding-top: 8px;">REQUISITOS</p>
        <hr style="border-width: 2px; margin:0; border-color: #666666;">
        <p style="color:#808080; font-family: oswaldregular; font-size: 16px; padding-top: 8px;">{{vacanteId.requisitos}}</p>

        <br>

        <p style="color:#b2b2b2; font-family: oswaldregular; font-size: 24px; padding-top: 8px;">ACTIVIDADES</p>
        <hr style="border-width: 2px; margin:0; border-color: #666666;">
        <p style="color:#808080; font-family: oswaldregular; font-size: 16px; padding-top: 8px;">{{vacanteId.actividades}}</p>

        <br>

        <p style="color:#b2b2b2; font-family: oswaldregular; font-size: 24px; padding-top: 8px;">INCENTIVOS</p>
        <hr style="border-width: 2px; margin:0; border-color: #666666;">
        <p style="color:#808080; font-family: oswaldregular; font-size: 16px; padding-top: 8px;">{{vacanteId.incentivos}}</p>

        <br>

        <p style="color:#b2b2b2; font-family: oswaldregular; font-size: 24px; padding-top: 8px;">PRESTACIONES</p>
        <hr style="border-width: 2px; margin:0; border-color: #666666;">
        <p style="color:#808080; font-family: oswaldregular; font-size: 16px; padding-top: 8px;">{{vacanteId.prestaciones}}</p>

        <br>

        <p style="color:#b2b2b2; font-family: oswaldregular; font-size: 24px; padding-top: 8px;">REMUNERACIÓN</p>
        <hr style="border-width: 2px; margin:0; border-color: #666666;">
        <p style="color:#808080; font-family: oswaldregular; font-size: 16px; padding-top: 8px;">{{vacanteId.remuneracion}}</p>

        <br>

        <p style="color:#b2b2b2; font-family: oswaldregular; font-size: 24px; padding-top: 8px;">CONTACTO</p>
        <hr style="border-width: 2px; margin:0; border-color: #666666;">
        <p style="color:#808080; font-family: oswaldregular; font-size: 16px; padding-top: 8px;">{{vacanteId.contacto}}</p>

        <br>

        <p style="color:#b2b2b2; font-family: oswaldregular; font-size: 24px; padding-top: 8px;">DIRECCIÓN</p>
        <hr style="border-width: 2px; margin:0; border-color: #666666;">
        <p style="color:#808080; font-family: oswaldregular; font-size: 16px; padding-top: 8px;">{{vacanteId.direccionEmpresa}}</p>
        
        <iframe ng-if="vacanteId.latitud" width="635" height="450" style="padding-bottom:40px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" ng-src="{{vacanteId.urlMaps}}"></iframe>
        
<br> 

      </div>

      <div class="col-md-3" style="border: 2px solid #b2b2b2; background-color: #fff; text-align:center; -webkit-border-radius: 10px; -khtml-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px;">
        <img style="width:190px; padding-top:25px;" src="{{vacanteId.imagen}}" onerror="this.src='img/lws_logo.png'"></img>
        <p style="color:#b2b2b2; font-family: oswaldregular; font-size: 22px; padding-top: 15px;">{{vacanteId.nombreEmpresa}}</p>
        <a class="fa fa-user" style="color:#000000; font-size: 14px; padding-top:20px;"></a>
        <a style="color:#000000; font-family: oswaldregular; font-size: 14px; padding-top: 8px;">{{vacanteId.categoria}}</a>
        <br><br>
        <hr style="border-width: 2px; margin:0; border-color: #666666;">
        <br>
        <button type="submit" style="background-color:#60bfdb; height: 45px; width:190px; color:#6f596a; font-family: oswaldregular; cursor:pointer; font-size:20px;" onclick="abrirSubirVacante();">POSTULARSE</button>
        <br><br>
        <hr style="border-width: 2px; margin:0; border-color: #666666;">
        <br>
        <a target="_blank" href="https://www.facebook.com/sharer.php?u=http://lws.mx/pages_es/pg_empleo_desc.php?id={{vacanteId.id}}"><img style="width:190px; padding-bottom:8px; cursor:pointer;" src="img/facebook.png"></img></a>
        <a target="_blank" href="https://twitter.com/intent/tweet?text={{vacanteId.nombreEmpresa}}&url=http://lws.mx/pages_es/pg_empleo_desc.php?id={{vacanteId.id}}"><img style="width:190px; padding-bottom:8px; cursor:pointer;" src="img/twitter.png"></img></a>
        <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=lws.mx/pages_es/pg_empleo_desc.php?id={{vacanteId.id}}&title={{vacanteId.nombreEmpresa}}&summary={{vacanteId.categoria}}&source=http://lws.mx"><img style="width:190px; padding-bottom:25px; cursor:pointer;" src="img/linkedin.png"></img></a>
      </div>

    </div>
            
    <br>     

<tr>
  <td width="893" height="70" colspan="3" valign="bottom" background="#CC0099">
     <div style=" background-color:#87c3e7; font-style:normal; height:70px; alignment-adjust:central">
       <div class="col-md-1" style="padding-left:25px;">
       <img style="width:40px; padding-top: 15px;" src="img/jobs2.png"></img>
       </div>
       <div class="col-md-11" style="padding:0;">
       <p style="font-family: oswaldregular; color: #db57af; padding-top: 16px; margin:0; font-size:25px;">EMPLEOS RELACIONADOS</p>
       </div>
     </div> 

     <div style=" background-color:#e1e8ec; font-style:normal; height:8px; alignment-adjust:central">
     </div>

     <div class="row" style="margin-bottom: 2px;">
              
         <div ng-repeat="(key,x) in todasVacantes.id" class="col-md-12">
                <div class="col-md-1" style="background-color: #fff; height: 70px; padding:0; text-align:center;">
                  <img style="width:50px; padding-top: 12px;" src="img/jobs.png"></img>
                </div> 
                <div class="col-md-4" style="background-color: #fff; height: 70px; padding:0;">
                  <p style="font-family: oswaldregular; color: #000; font-size: 15px; padding-top: 22px; padding-left: 5px;">{{todasVacantes.categoria[key]}}</p>
                </div> 
                <div class="col-md-1" style="background-color: #fff; height: 70px; padding-left:35px;">
                  <img style="width:35px; padding-top:15px;" src="img/ubicacion.png"></img>
                </div> 
                <div class="col-md-3" style="background-color: #fff; height: 70px; padding:0;">
                  <p style="font-family: oswaldregular; color: #787878; font-size: 15px; padding-top:22px;">{{todasVacantes.estado[key]}}</p>
                </div> 
                <div class="col-md-3" style="background-color: #fff; height: 70px; padding:15px;">
                  <button type="submit" style="background-color:#DA57AD; height: 35px; width:175px; color:#fff; font-family: oswaldregular; cursor:pointer;" ng-click="">{{todasVacantes.tipoTiempo[key]}}</button>
                </div> 
         </div>
              
    </div>
  </td>
</tr>

    
        <!--TERMINA TABLA DE SERVICIOS
    -->
    
    
	</td>
</tr>
             
 <tr>
    <td width="893" height="70" colspan="3" align="center" valign="bottom" background="#CC0099">
       <div class="txt_oswald_r" style=" width:893px; background-color:#CC0099; font-style:normal; color:#FFF; text-align:center; padding-top:15px; padding-bottom:5px; height:45px; alignment-adjust:central">®201&nbsp; LINKWORK SOLUTIONS   &nbsp;•&nbsp;   <a href="pg_aviso.html" target="_self">AVISO DE PRIVACIDAD</a>   &nbsp;•&nbsp;  CONTACTO@LWS.MX   &nbsp;•&nbsp;  TEL. 01 (55) 53105263 / 01 (55) 35363857</div>
     </td>
  </tr>

            
       </table>
      </td>
    </tr>

</table>
<div style="height:40px;"></div>
</div>

    <!-- Notifications Modal -->
    <div style="width: 100%;" class="modal modal-signup" id="notificacionesAbrir" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="margin: 0px; padding: 0px; margin-top: 20px;">
            <div class="modal-content" style="height: 500px; overflow-y: auto; ">
                <div class="modal-header">
                    <button style="float: left; color: red; opacity: 1;" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <!--<p class="intro text-center">It only takes 3 minutes!</p>-->
                    <p></p>
                </div>
                <div class="modal-body col-md-12">
                  <div clas="row">
                    <div class="text-center col-md-12">                        
                        <div class="social-login text-center">    
<div ng-controller="empleoCtrl" class="col-md-12">

  <div class="col-md-12">

    <div style="z-index:10; text-align:center; box-shadow: 0 0 15px black;">
      
      <div id="menu" style="height:250px; background:#87c3e7;">
        <div style="z-index:11; padding-top:12px;">
          <div class="col-md-2">
            <a href="pg_empleo_desc.php">
              <img style="width:120px; cursor:pointer;" src="img/back.png"></img>
            </a>
          </div>
          <div class="col-md-10" style="padding-top: 7px; padding-right: 143px;">
          <a style="color:#6f596a; font-family: oswaldregular; font-size: 27px; text-decoration: none">POSTULARSE</a>
          </div>

<div style="height:130px; background:#db57af; margin-left: 50px; width: 620px; margin-top: 60px;">
        <div style="z-index:11; padding-top:12px;">
          <div class="col-md-10" style="padding-left: 110px;"> 
          <a style="color:#ffffff; font-family: oswaldregular; font-size: 13px; margin: 0; padding-top: 15px; text-align: center; text-decoration: none">PARA POSTULARSE A LA VACANTE POR FAVOR SELECCIONE EL MODO MÁS CONVENIENTE PARA USTED</a>
          </div>
          <div class="col-md-12">
          <div class="col-md-2" style="padding-top: 12px; padding-left: 50px;">
            <img style="width:35px;" src="img/cv1.png"></img>
          </div>
          <div class="col-md-4" style="height: 70px; padding:15px; padding-left:0px;">
            <button onclick="document.getElementById('PRE').style.display='none'; document.getElementById('menu').style.height='700px'; document.getElementById('CV').style.display='block';" type="submit" style="background-color:#60bfdb; height: 35px; width:175px; color:#fff; font-family: oswaldregular; cursor:pointer;">ENVIAR C.V.</button>
          </div>
          <div class="col-md-4" style="height: 70px; padding:15px; padding-left:15px;">
            <button onclick="document.getElementById('CV').style.display='none'; document.getElementById('menu').style.height='1275px'; document.getElementById('PRE').style.display='block'" type="submit" style="background-color:#60bfdb; height: 35px; width:175px; color:#fff; font-family: oswaldregular; cursor:pointer;">LLENAR PRE-SOLICITUD</button>
          </div>
          <div class="col-md-2" style="padding-top: 12px; padding-right: 50px;">
            <img style="width:35px;" src="img/cv2.png"></img>
          </div>
          </div>
        </div>
      </div>

      
<div id="CV" style="height:470px; background:#f1f1f1; margin-left: 50px; width: 620px; display:none;">
        <div class="col-md-12" style="text-align: left; padding-top: 15px;">
          <a style="color:#000000; font-family: oswaldregular; font-size: 13px; margin: 0; padding-top: 15px; text-decoration: none">Por favor llene los espacios del formulario sin dejar alguno vacío, tan pronto nos llegue su información nos pondremos en contacto con usted.</a>
        </div>      
        <div class="col-md-12" style="text-align: left;">
          <div class="col-md-1" style="padding-left: 10px; width: 5px;" padding="0">
          <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; margin: 0; padding-top: 15px; text-align: center; text-decoration: none">*</a>
          </div>
          <div class="col-md-11" style="padding-top: 2px; padding-left: 0px;">
          <a style="color:#f35fa6; font-family: oswaldregular; font-size: 13px; margin: 0; padding-top: 15px; text-align: center; text-decoration: none">Los campos marcados con (*) son obligatorios</a>
          </div>
        </div>    
        <div class="col-md-12" style="padding-top: 40px;">
          <a style="color:#999999; font-family: oswaldregular; font-size: 14px; margin: 0; padding-top: 15px; text-align: center; text-decoration: none">USTED ESTÁ POSTULÁNDOSE PARA LA VACANTE NO. CLAVE:</a>
        </div>    

        <div class="col-md-12" style="padding-top: 12px;">
           <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">NOMBRE Y APELLIDOS</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="nombreCompleto2" class="form-control" type="text" placeholder="Escriba su(s) nombre(s) completo con apellidos" style="font-size: 13px; height: 30px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
             <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; text-decoration: none">*</a>
           </div>
        </div>

        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">PUESTO Y PROFESIÓN/OFICIO</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="tituloProfesional2" class="form-control" type="text" placeholder="Escriba su puesto y profesión u oficio" style="font-size: 13px; height: 30px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
             <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; text-decoration: none">*</a>
           </div>
        </div>
       
        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">TELÉFONO</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="telefono2" class="form-control" type="text" placeholder="Escriba su teléfono para contactarle" style="font-size: 13px; height: 30px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
             <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; text-decoration: none">*</a>
           </div>
        </div>
        
        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">EMAIL</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="email2" class="form-control" type="text" placeholder="Escriba su email de contacto" style="font-size: 13px; height: 30px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
             <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; text-decoration: none">*</a>
           </div>
        </div>

        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">OFERTA LABORAL</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="oferta2" class="form-control" type="text" placeholder="Oferta y/o vacante para la que se postula" style="font-size: 13px; height: 30px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
             <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; text-decoration: none">*</a>
           </div>
        </div>

        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">ADJUNTAR C.V.</a>
              </div>
           </div>
           <div class="col-md-6">
             <input onclick="" id="fileImage" type="file" onchange="subirImage();" name="file" style="background-color:#87c3e7; height: 30px; width: 100%; color:#940452; font-family: oswaldregular; cursor:pointer;" >
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
             <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; text-decoration: none">*</a>
           </div>
        </div>

        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">MENSAJE</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="comentarios2" class="form-control" type="text" placeholder="Escriba un mensaje" style="font-size: 13px; height: 90px; width: 300px; padding-bottom: 60px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
           </div>
        </div>

         <div class="col-md-12">
           <div class="col-md-5">
           </div>
           <div class="col-md-7" style="padding-left: 50px; padding-top: 10px;">
           <button  onclick="enviar123();" type="submit" style="background-color:#60bfdb; height: 35px; width:150px; color:#940452; font-family: oswaldregular; cursor:pointer;">ENVIAR C.V.</button>
           </div>
         </div>

        </div>
      </div>

<div id="PRE" style="height:1050px; background:#f1f1f1; margin-left: 50px; width: 620px; display:none;">
        <div class="col-md-12" style="text-align: left; padding-top: 15px;">
          <a style="color:#000000; font-family: oswaldregular; font-size: 13px; margin: 0; padding-top: 15px; text-decoration: none">Por favor llene los espacios del formulario sin dejar alguno vacío, tan pronto nos llegue su información nos pondremos en contacto con usted.</a>
        </div>      
        <div class="col-md-12" style="text-align: left;">
          <div class="col-md-1" style="padding-left: 10px; width: 5px;" padding="0">
          <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; margin: 0; padding-top: 15px; text-align: center; text-decoration: none">*</a>
          </div>
          <div class="col-md-11" style="padding-top: 2px; padding-left: 0px;">
          <a style="color:#f35fa6; font-family: oswaldregular; font-size: 13px; margin: 0; padding-top: 15px; text-align: center; text-decoration: none">Los campos marcados con (*) son obligatorios</a>
          </div>
        </div>    
        <div class="col-md-12" style="padding-top: 40px;">
          <a style="color:#999999; font-family: oswaldregular; font-size: 14px; margin: 0; padding-top: 15px; text-align: center; text-decoration: none">USTED ESTÁ POSTULÁNDOSE PARA LA VACANTE NO. CLAVE:</a>
        </div>   

        <div style="background:#87c3e7; height: 30px; margin-left: 80px; width: 445px; padding-top: 5px; text-align: left; margin-top: 12px;">
          <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">DATOS GENERALES</a>
        </div>

        <div class="col-md-12" style="padding-top: 5px;">
           <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">NOMBRE Y APELLIDOS</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="nombreCompleto" class="form-control" type="text" placeholder="Escriba su(s) nombre(s) completo con apellidos" style="font-size: 13px; height: 30px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
             <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; text-decoration: none">*</a>
           </div>
        </div>
       
        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">TELÉFONO</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="telefono" class="form-control" type="text" placeholder="Escriba su teléfono para contactarle" style="font-size: 13px; height: 30px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
             <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; text-decoration: none">*</a>
           </div>
        </div>
        
        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">EMAIL</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="email" class="form-control" type="text" placeholder="Escriba su email de contacto" style="font-size: 13px; height: 30px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
           </div>
        </div>

        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">ESTADO EN EL QUE RADICA</a>
              </div>
           </div>
           <div class="col-md-6">
             <select id="estado" name="estados" onchange="" style="display: block; width: 250px; height: 30px;">
<option value="" disabled selected>Seleccione un Estado</option>
<option value="Todas">Todas las zonas</option>
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
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
           </div>
        </div>

        <!--<div class="col-md-12" style="margin-top: 32px;">
          <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">¿PUEDE VIAJAR?</a>
              </div>
           </div>
           <div class="col-md-6">
             <select name="" onchange="" style="display: block; width: 100px; height:30px;">
              <option value="" disabled selected>Si / No</option>
              <option value="Si">Si</option>
              <option value="No">No</option>
             </select>
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
           </div>
        </div>-->

        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">OFERTA LABORAL</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="oferta" class="form-control" type="text" placeholder="Oferta y/o vacante para la que se postula" style="font-size: 13px; height: 30px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
             <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; text-decoration: none">*</a>
           </div>
        </div>

        <div style="background:#87c3e7; height: 30px; margin-left: 80px; width: 445px; padding-top: 5px; text-align: left; margin-top: 38px;">
          <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">EXPERIENCIA LABORAL / SOBRE EL CANDIDATO</a>
        </div>

        <div class="col-md-12" style="padding-top: 5px;">
           <div class="col-md-4">
              <div style="height:50px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">TÍTULO PROFESIONAL Y PROFESIÓN U OFICIO</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="tituloProfesional" class="form-control" type="text" placeholder="Escriba su título profesional y/o profesión u oficio a la que se dedica" style="font-size: 13px; height: 50px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
             <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; text-decoration: none">*</a>
           </div>
        </div>
       
        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:30px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">ÚLTIMO GRADO DE ESTUDIOS</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="gradoEstudios" class="form-control" type="text" placeholder="Escriba su último grado de estudio" style="font-size: 13px; height: 30px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
             <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; text-decoration: none">*</a>
           </div>
        </div>
        
        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:60px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">ALGÚN OTRO CURSO Y/O DIPLOMADO</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="diplomado" class="form-control" type="text" placeholder="Escriba separado por comas, si cuenta con algún curso y/o dimplomado" style="font-size: 13px; height: 60px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
           </div>
        </div>

        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:60px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">HABILIDADES</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="habilidades" class="form-control" type="text" placeholder="Escriba sobre sus habilidades y aptitudes" style="font-size: 13px; height: 60px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
           </div>
        </div>

        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:90px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">COMPETENCIAS LABORALES</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="competencias" class="form-control" type="text" placeholder="Escriba sobre sus competencias laborales" style="font-size: 13px; height: 90px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
             <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; text-decoration: none">*</a>
           </div>
        </div>

        <div style="background:#87c3e7; height: 30px; margin-left: 80px; width: 445px; padding-top: 5px; text-align: left; margin-top: 168px;">
          <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">EXPERIENCIA LABORAL / SOBRE SU ÚLTIMO EMPLEO</a>
        </div>

        <div class="col-md-12" style="padding-top: 5px;">
           <div class="col-md-4">
              <div style="height:32px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">ÚLTIMO EMPLEADOR</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="ultimoEmpleador" class="form-control" type="text" placeholder="Escriba el nombre de la última empresa/persona para quien trabajó" style="font-size: 13px; height: 30px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
           </div>
        </div>
       
        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:50px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">UBICACIÓN DE SU ÚLTIMO EMPLEADOR</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="ultimoEmpleo" class="form-control" type="text" placeholder="Escriba la dirección de la última empresa/persona para quien trabajó" style="font-size: 13px; height: 50px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
           </div>
        </div>
        
        <div class="col-md-12" style="height: 59px; margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:72px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">DESDE CUÁNDO Y HASTA CUÁNDO LABORÓ ALLÍ</a>
              </div>
           </div>
           <div class="col-md-6">
             <div class="col-md-6">
               <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">DESDE</a>
             </div>
             <div class="col-md-6">
               <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">HASTA</a>
             </div>
             <div class="col-md-3" style="padding-left: 0px;">
             <select id="mes1" name="" onchange="" style="display: block; width: 200px; width: 65px; height: 30px;">
              <option value="" disabled selected>MES</option>
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
             </select>
             </div>
             <div class="col-md-3" style="padding-left: 5px;">
             <select id="ano1" name="" onchange="" style="display: block; width: 200px; width: 65px; height: 30px;">
              <option value="" disabled selected>AÑO</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
             </select>
             </div>
             <div class="col-md-3" style="padding-left: 10px;">
             <select id="mes2" name="" onchange="" style="display: block; width: 200px; width: 65px; height: 30px;">
              <option value="" disabled selected>MES</option>
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
             </select>
             </div>
             <div class="col-md-3" style="padding-left: 15px;">
             <select id="ano2" name="" onchange="" style="display: block; width: 200px; width: 65px; height: 30px;">
              <option value="" disabled selected>AÑO</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
             </select>
             </div>
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
             <a style="color:#9d005d; font-family: oswaldregular; font-size: 22px; text-decoration: none">*</a>
           </div>
           <div class="col-md-6">
               <input id="trabajaActualmente" type="checkbox" checked="" value="" style="color:#940452; font-family: oswaldregular; font-size: 10px;">ACTUALMENTE TRABAJO ALLÍ
           </div>
        </div>

        <div class="col-md-12" style="margin-top: 32px;">
           <div class="col-md-4">
              <div style="height:90px; background:#a691d0; margin-left: 50px; width: 140px; padding-top: 5px; text-align: left;">
                <a style="color:#940452; font-family: oswaldregular; font-size: 10px; padding-left: 10px; padding-top: 5px; text-decoration: none">BREVE DESCRIPCIÓN DE LAS ACTIVIDADES QUE DESEMPEÑABA EN SU PUESTO</a>
              </div>
           </div>
           <div class="col-md-6">
             <input id="descripcionAnteriores" class="form-control" type="text" placeholder="Escriba una breve descripción de las actividades que realizaba en su trabajo anterior y/o actualEscriba una breve descripción de las actividades que realizaba en su trabajo anterior y/o actual" style="font-size: 13px; height: 90px; width: 300px;">
           </div>
           <div class="col-md-2" style="padding-right: 60px; margin-top: -5px;">
           </div>
        </div>

         <div class="col-md-12">
           <div class="col-md-5">
           </div>
           <div class="col-md-7" style="padding-left: 0px; padding-top: 10px;">
           <button onclick="enviarForm123();" type="submit" style="background-color:#60bfdb; height: 35px; width:200px; color:#940452; font-family: oswaldregular; cursor:pointer;">ENVIAR PRE-SOLICITUD</button>
           </div>
         </div>

        </div>
      </div>

   </div>

  </div>
</div><!--fin col-12-->
                    
                    <!--<div class="divider"><span>Or</span></div>-->
                  </div> <!--fin row-->
                </div><!--//modal-body-->
                <!--
                <div class="modal-footer">
                    <p>Already have an account? <a class="login-link" id="login-link" href="http://themes.3rdwavemedia.com/tempo/1.4/#">Log in</a></p>                    
                </div>--><!--//modal-footer-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog col-md-8-->
        <div class="col-md-2"></div>
    </div><!--//modal-->

</body>
</html>
