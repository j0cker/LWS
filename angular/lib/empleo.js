app.controller('empleoCtrl', function($scope, evt){
    
  var hojaGlobal = 1;
    
  evt.getCategorias().then(function (response) {
    console.log("Get Categorias");
    console.log(response.data);
    $scope.todasCategorias = response.data;
  }, function (response) {
    /*ERROR*/
  });
  
  evt.getVacantes(hojaGlobal).then(function (response) {
    console.log("Get Vacantes");
    console.log(response.data);
    $scope.todasVacantes = response.data;
  }, function (response) {
    /*ERROR*/
  });
  
  $scope.buscar = function(){
    console.log("Buscar");
    $("#vermas").css("display","none");
    var tipoTiempo1 = document.getElementById("opcion1").checked;
    var tipoTiempo2 = document.getElementById("opcion2").checked;
    var tipoTiempo3 = document.getElementById("opcion3").checked;
    var tipoTiempo4 = document.getElementById("opcion4").checked;
    var tipoTiempo5 = document.getElementById("opcion5").checked;
    var tipoTiempo6 = document.getElementById("opcion6").checked;
    var categorias123 = $("#categorias123").val();
    var estados123 = $("#estados123").val();
    var texto123 = $("#texto123").val();
    evt.buscarVacantesUser(tipoTiempo1,tipoTiempo2,tipoTiempo3,tipoTiempo4,tipoTiempo5,tipoTiempo6,categorias123, estados123, texto123).then(function (response) {
      console.log(response.data);
      if(response.data.true=="false"){
        alert("No encontré nada");  
      } else {
        $scope.todasVacantes = response.data;  
      }
    }, function (response) {
        /*ERROR*/
    });
  };
  
  $scope.incrementarHoja = function(){
    console.log("Incrementar Hoja");
    hojaGlobal = hojaGlobal +1;
    evt.getVacantes(hojaGlobal).then(function (response) {
        console.log("Get Vacantes");
        console.log(response.data);
        if(response.data.true=="false"){
            alert("No hay más empleos");
        } else {
          for(var sd213=0; sd213<response.data.categoria.length; sd213++){
            $scope.todasVacantes.categoria.push(response.data.categoria[sd213]);
            $scope.todasVacantes.estado.push(response.data.estado[sd213]);
            $scope.todasVacantes.fecha.push(response.data.fecha[sd213]);
            $scope.todasVacantes.id.push(response.data.id[sd213]);
            $scope.todasVacantes.nombreEmpresa.push(response.data.nombreEmpresa[sd213]);
            $scope.todasVacantes.tipoTiempo.push(response.data.tipoTiempo[sd213]);
          }
          //$scope.todasVacantes = JSON.stringify($scope.todasVacantes); 
          console.log($scope.todasVacantes);
        }
    }, function (response) {
        /*ERROR*/
    });
  };
  
});