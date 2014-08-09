angular.module('words', ['ui.router'])

.config(function($stateProvider, $urlRouterProvider, $locationProvider) {

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

        .state('posts_single', {
            // single post
        })

        .state('posts_create', {
            url: '/posts/create',
            templateUrl: '/templates/posts/create.html'
        })

    $locationProvider.html5Mode(false) // make this work properly with the server-side routes
})