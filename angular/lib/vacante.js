app.controller('vacanteCtrl', function($scope, $rootScope, evt, MetaService){

   console.log(idReg);
   evt.getVacanteId(idReg).then(function (response) {
    console.log("[vacante.js] Get Vacantes Id "+idReg+"");
    console.log(response.data);
    $scope.vacanteId = response.data;

    $rootScope.metaservice = MetaService;
    $rootScope.metaservice.setImagenFacebook($scope.vacanteId.imagen);
  }, function (response) {
    /*ERROR*/
  });
  
  evt.getVacantes(1).then(function (response) {
    console.log("Get Vacantes");
    console.log(response.data);
    $scope.todasVacantes = response.data;
  }, function (response) {
    /*ERROR*/
  });
  
});