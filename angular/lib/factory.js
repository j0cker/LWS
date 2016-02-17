app.factory('evt',function($http){
	return{
        getCategorias:function(){
            var url = '../admin/scripts/get-categoriasTodas.php';
			return $http.get(url, {cache: false, params: { } })
	    },
        getVacantes:function(hoja){
            var url = '../admin/scripts/get-vacantes.php';
			return $http.get(url, {cache: false, params: { hoja:hoja } })
	    },
	};
});