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

        .state('posts_create', {
            url: '/posts/create',
            templateUrl: '/templates/posts/create.html'
        })

        .state('posts_single', {
            url: '/posts/:id',
            templateUrl: '/templates/posts/single.html'
        })

    $locationProvider.html5Mode(false) // make this work properly with the server-side routes
})