angular.module('mooshApp', []).service('mooshProvider', ['$http', function ($http) {
    return {
        getAll: function() {
            return $http.get('https://foxer-zt.github.io/moosh.json');
        }
    }
}]).config(['$routeProvider', function($routeProvider) {
	$routeProvider.when('/moosh', {controller: 'menuCtrl'});
	$routeProvider.when('/moosh:videoIndex', {controller: 'menuCtrl'});
}]);
