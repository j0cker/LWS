app.controller('empleoCtrl', function($scope, evt){
    
  var hojaGlobal = 1;
    
  evt.getCategorias().then(function (response) {
    console.log("Get Categorias");
    console.log(response.data);
    $scope.todasCategorias = response.data;
  }, function (response) {
    /*ERROR*/
    alert("ERROR");
  });
  
  evt.getVacantes(hojaGlobal).then(function (response) {
    console.log("Get Vacantes");
    console.log(response.data);
    $scope.todasVacantes = response.data;
  }, function (response) {
    /*ERROR*/
    alert("ERROR");
  });
  
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
        alert("ERROR");
    });
  };
  
});