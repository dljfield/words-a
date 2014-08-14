angular.module('words', [
    'ui.router',
    'ngResource',
    'words.controllers.AuthController',
    'words.controllers.UnpublishedController',
    'words.controllers.NavController',
    'words.services.AuthService',
    'words.services.Session',
    'words.services.PostService',
    'words.directives.MainNavigation',
    'words.interceptors.AuthInterceptor'
])

.config(function($stateProvider, $urlRouterProvider, $locationProvider, $httpProvider) {

    // Default
    $urlRouterProvider.otherwise('/');

    // States
    $stateProvider

        // Index of posts
        .state('home', {
            url: '/',
            templateUrl: '/templates/posts/index.html'
        })

        // About page
        .state('about', {
            url: '/about',
            templateUrl: 'templates/about.html'
        })

        // protect
        .state('posts_create', {
            url: '/posts/create',
            templateUrl: '/templates/posts/create.html'
        })

        // protect
        .state('unpublished_posts', {
            url: '/posts/unpublished',
            templateUrl: '/templates/posts/index.html',
            controller: 'UnpublishedController'
        })

        .state('posts_single', {
            url: '/posts/:id',
            templateUrl: '/templates/posts/single.html'
        })

        .state('login', {
            url: '/login',
            templateUrl: '/templates/auth/login.html',
            controller: 'AuthController'
        })

    $locationProvider.html5Mode(false) // make this work properly with the server-side routes

    $httpProvider.interceptors.push('AuthInterceptor');
})