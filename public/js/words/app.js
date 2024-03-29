angular.module('words', [
    'ui.router',
    'ngResource',
    'words.controllers.AuthController',
    'words.controllers.UnpublishedController',
    'words.controllers.NavController',
    'words.controllers.SinglePostController',
    'words.controllers.PostListController',
    'words.controllers.CreatePostController',
    'words.services.AuthService',
    'words.services.Session',
    'words.services.PostService',
    'words.directives.MainNavigation',
    'words.directives.PostList',
    'words.directives.SinglePost',
    'words.directives.CreatePost',
    'words.directives.Markdown',
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
            templateUrl: '/templates/posts/index.html',
            controller: 'PostListController'
        })

        // About page
        .state('about', {
            url: '/about',
            templateUrl: 'templates/about.html'
        })

        // protect
        .state('posts_create', {
            url: '/posts/create',
            templateUrl: '/templates/posts/create.html',
            controller: 'CreatePostController'
        })

        // protect
        .state('unpublished_posts', {
            url: '/posts/unpublished',
            templateUrl: '/templates/posts/index.html',
            controller: 'UnpublishedController'
        })

        .state('posts_single', {
            url: '/posts/:id',
            templateUrl: '/templates/posts/single.html',
            controller: 'SinglePostController'
        })

        .state('login', {
            url: '/login',
            templateUrl: '/templates/auth/login.html',
            controller: 'AuthController'
        })

    $locationProvider.html5Mode(false) // make this work properly with the server-side routes

    $httpProvider.interceptors.push('AuthInterceptor');
})