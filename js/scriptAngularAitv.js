var app= angular.module('myApp',[]);
	app.controller('formController', function($scope,$http){
		$scope.insertdata=function(){
			$http.post("../insert.php", {
			
				'nombres':$scope.nombres,
				'apellidos':$scope.apellidos,
				'nacimiento':$scope.nacimiento,
				'genero':$scope.genero,
				'fotos':$scope.fotos,
				'correo':$scope.correo,
				'celular':$scope.celular,
				'residencia':$scope.residencia,
				'cedula':$scope.cedula,
				'estatura':$scope.estatura,
				'peso':$scope.peso,
				'conduce':$scope.conduce,
				'piel':$scope.piel,
				'ojos':$scope.ojos,
				'cabello':$scope.cabello,
				'experiencia':$scope.experiencia,
				'deportes':$scope.deportes,
				'habilidades':$scope.habilidades,

			})

			.success(function(data,status,headers,config){
				console.log("Bienvenido a AITV! Sus datos han sido insertados satisfactoriamente!");
			});
		}
	 })