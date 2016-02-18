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
        buscarVacantesUser:function(tipoTiempo1,tipoTiempo2,tipoTiempo3,tipoTiempo4,tipoTiempo5,tipoTiempo6,categorias123, estados123, texto123){
            var url = '../admin/scripts/buscar-vacantes-users.php';
			return $http.get(url, {cache: false, params: { tipoTiempo1:tipoTiempo1, tipoTiempo2:tipoTiempo2, tipoTiempo3:tipoTiempo3, tipoTiempo4:tipoTiempo4, tipoTiempo5:tipoTiempo5, tipoTiempo6:tipoTiempo6, categorias123:categorias123, estados123:estados123, texto123:texto123 } })
	    },
	};
});