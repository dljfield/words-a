angular.module('words', ['ngRoute', 'words.controllers','words.directives'])

.config(['$routeProvider', function($routeProvider) {
    $routeProvider
    .when('/', {
        templateUrl: '/home',
        controller: 'HomeController'
    })
    .when('/post/:id', {
        templateUrl: '/singlepost',
        controller: 'PostController'
    })
    .otherwise({
        redirectTo: '/'
    });
}])

.config(['$locationProvider', function($locationProvider) {
    $locationProvider
    .html5Mode(false); // TODO: work out how to make this work set to true!
}]);