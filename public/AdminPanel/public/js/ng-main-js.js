angular.module('BlankApp', ['ngMaterial','ngRoute'])
.config('AppCtrl',function($routeProvider) {
		$routeProvider

			// route for the home page
			.when("/", {
				templateUrl : 'home.html',
				controller  : 'mainController'
			})

			// route for the about page
			.when('/orders', {
				templateUrl : 'pages/orders.html',
			})
	});