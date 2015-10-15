<?PHP
?>
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header style="background-color: #AD1457;" class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">LWS JOB MANAGER <img style="width: 100px;" src="http://lws.mx/pages_es/img/header_bckg_bts-top-nm_08.png" /></span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <!--
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
      </nav>
      -->
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Administrador</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="index.php"><span style="font-size: 15px; padding-right: 10px;" class="fa fa-tachometer"></span> Tablero Principal</a>
      <a class="mdl-navigation__link" href="alta-vacantes.php"><span style="font-size: 15px; padding-right: 10px;" class="fa fa-building-o"></span> Altas de Vacantes</a>
      <a class="mdl-navigation__link" href="administrar-cvs.php"><span style="font-size: 15px; padding-right: 10px;" class="fa fa-briefcase"></span> Administrar CV's</a>
      <a class="mdl-navigation__link" href="categorias.php"><span style="font-size: 15px; padding-right: 10px;" class="fa fa-table"></span> Categorías</a>
      <a class="mdl-navigation__link" href=""><span style="font-size: 15px; padding-right: 10px;" class="fa fa-sign-out"></span> Salir</a>
    </nav>
  </div>