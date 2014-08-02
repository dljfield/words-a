angular.module('words', ['ngRoute', 'words.controllers','words.directives', 'words.services'])

.config(['$routeProvider', function($routeProvider) {
    $routeProvider
    .when('/', {
        templateUrl: '/templates/home.html',
        controller: 'HomeController'
    })
    .when('/about', {
        templateUrl: '/templates/about.html'
    })
    .when('/posts', {
        templateUrl: '/templates/home.html',
        controller: 'HomeController'
    })
    .when('/posts/:id', {
        templateUrl: '/templates/single_post.html',
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