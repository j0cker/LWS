
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
    <script src="../angular/lib/vacante.js"></script>

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
    
    
     <div style="padding-top:12px;">
      <!-- ImageReady Slices (sub-menu_serv_y_sol.ai) -->
      <table width="892" height="31" border="0" align="center" cellpadding="0" cellspacing="0" id="Tabla_01">
        <tr>
          <td rowspan="2" align="center" valign="middle"><img src="img/sub-menu_serv_y_sol-nm_01.png" width="193" height="31" alt=""></td>
          <td rowspan="2" align="center" valign="middle"><a href="pg_servicios.html" target="_self" onMouseOver="MM_swapImage('bt_servisio','','img/sub-menu_serv_y_sol-ovr_02.png',1)" onMouseOut="MM_swapImgRestore()"><img src="img/sub-menu_serv_y_sol-nm_02.png" name="bt_servisios.html" alt="SERVICIOS" width="120" height="31" border="0"></a></td>
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
        <img style="width:190px; padding-top:25px;" src="img/schering.gif"></img>
        <p style="color:#b2b2b2; font-family: oswaldregular; font-size: 22px; padding-top: 15px;">{{vacanteId.nombreEmpresa}}</p>
        <a class="fa fa-user" style="color:#000000; font-size: 14px; padding-top:20px;"></a>
        <a style="color:#000000; font-family: oswaldregular; font-size: 14px; padding-top: 8px;">{{vacanteId.categoria}}</a>
        <br><br>
        <hr style="border-width: 2px; margin:0; border-color: #666666;">
        <br>
        <button type="submit" style="background-color:#60bfdb; height: 45px; width:190px; color:#6f596a; font-family: oswaldregular; cursor:pointer; font-size:20px;">POSTULARSE</button>
        <br><br>
        <hr style="border-width: 2px; margin:0; border-color: #666666;">
        <br>
        <img style="width:190px; padding-bottom:8px; cursor:pointer;" src="img/facebook.png"></img>
        <img style="width:190px; padding-bottom:8px; cursor:pointer;" src="img/twitter.png"></img>
        <img style="width:190px; padding-bottom:25px; cursor:pointer;" src="img/linkedin.png"></img>
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
       <div class="txt_oswald_r" style=" width:893px; background-color:#CC0099; font-style:normal; color:#FFF; text-align:center; padding-top:15px; padding-bottom:5px; height:45px; alignment-adjust:central">®2014&nbsp; LINKWORK SOLUTIONS   &nbsp;•&nbsp;   <a href="pg_aviso.html" target="_self">AVISO DE PRIVACIDAD</a>   &nbsp;•&nbsp;  CONTACTO@LWS.MX   &nbsp;•&nbsp;  TEL. 01 (55) 53105263 / 01 (55) 35363857</div>
     </td>
  </tr>

            
       </table>
      </td>
    </tr>

</table></div>



</body>
</html>
