app.controller('empleoCtrl', function($scope, evt){
    
  evt.getCategorias().then(function (response) {
    console.log("Get Categorias");
    console.log(response.data);
    $scope.todasCategorias = response.data;
  }, function (response) {
    /*ERROR*/
    alert("ERROR");
  });
  
  evt.getVacantes(1).then(function (response) {
    console.log("Get Vacantes");
    console.log(response.data);
    $scope.todasVacantes = response.data;
  }, function (response) {
    /*ERROR*/
    alert("ERROR");
  });
  
});