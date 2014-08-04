angular.module('words.controllers', [])

.controller('HomeController', function($scope, PostService) {
    $scope.posts = PostService.query();
})

.controller('PostController', function($scope, $routeParams, PostService) {
    $scope.post = PostService.get({id: $routeParams.id});
})