(function(){
    "use strict";
    //'ngMaterial','ngCookies', 
	var app = angular.module('menuApp',['ngResource','colorpicker.module','jdFontselect','mdColorPicker'])
	.config(function($interpolateProvider) {
	    // To prevent the conflict of `{{` and `}}` symbols
	    // between Blade template engine and AngularJS templating we need
	    // to use different symbols for AngularJS.

	    $interpolateProvider.startSymbol('@[[');
	    $interpolateProvider.endSymbol(']]');
  	})
	.controller('MenuController',['$scope','$resource',function($scope,$resource){
		
		//$scope.categories = ['Cespoles','Herrajes','Tornillos','Menú 4','Menú 5'];
		var recurso = $resource('/menu/:id', { id:'@_id' });
		//$scope.msg = "mensage exito";
		$scope.categories = recurso.get();
	}])
	.controller('fontCtrl', ['$scope', function ($scope) {
		
	}]);

})();