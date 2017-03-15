app = angular.module('app',['ngSanitize']);

app.service('MetaService', function() {
    var imagenFacebook = "";
    return {
        setImagenFacebook: function(newImagenFacebook) {
			console.log("[title.js][set][imagenFacebook] " + imagenFacebook);
            imagenFacebook = newImagenFacebook;
        },
		metaImagenFacebook: function() { 
			console.log("[title.js][metaImagenFacebook] " + imagenFacebook); 
			return imagenFacebook; 
		},
    }
});

app.controller('titleCtrl', function($rootScope, $scope, evt){
});