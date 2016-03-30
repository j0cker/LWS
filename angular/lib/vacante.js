app.controller('vacanteCtrl', function($scope, evt){
   console.log(idReg);
   evt.getVacanteId(idReg).then(function (response) {
    console.log("Get Vacantes Id "+idReg+"");
    console.log(response.data);
    $scope.vacanteId = response.data;
  }, function (response) {
    /*ERROR*/
  });
});