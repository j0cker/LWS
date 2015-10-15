<?PHP
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<?PHP
require_once('desktop/header.php');
?>
<script>
function logear(){
  if(!$("#user").val()){
    alert("Ingresar Usuario");
  } else if(!$("#passwd").val()){
    alert("Ingresar Password");
  } else {
	  $.ajax({  data:  {user:$("#user").val() , passwd:$("#passwd").val() },
				url:   'scripts/login.php',
				type:  'POST',
				success:  function (response) {
				  obj = JSON.parse(response);
				  if(obj.login=="true"){
					window.location = "index.php";
				  } else {
				    alert("Usuario y/o Password Incorrecto");
				  }
				}, error: function (response) {
					alert("error intente de nuevo");
				}
	  });
  }
}
</script>
</head>
<body style="background: url('../images/login.png');">
  <center>
  <div style="margin-top: 100px; width: 527px; height: 450px; background: url('../images/caja.png');" class="row">
    <div class="col-md-12 text-center" style="margin-top: 240px;">
      <div class="row">
        <div class="col-md-12 text-left" style="margin: 0;">
          <div class="col-md-2"></div>
          <div class="col-md-8"><label>User:</label></div>
          <div class="col-md-2"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center" style="margin: 0;">
          <div class="col-md-2"></div>
          <div class="col-md-8"><input id="user" type="txt" class="form-control" required></div>
          <div class="col-md-2"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-left" style="margin-top: 0px;">
          <div class="col-md-2"></div>
          <div class="col-md-8"><label>Password:</label></div>
          <div class="col-md-2"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center" style="margin-top: 0px;">
          <div class="col-md-2"></div>
          <div class="col-md-8"><input id="passwd" type="password" class="form-control" required></div>
          <div class="col-md-2"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center" style="margin-top: 10px;">
          <div class="col-md-2"></div>
          <div class="col-md-8"><button onclick="logear();" id="signin" type="button" class="btn btn-info">Entrar</button></div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
  </div>
  </center>
</body>
<html>