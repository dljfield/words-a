angular.module('words.controllers.PostListController', [])

.controller('PostListController', function($scope, PostService) {
    $scope.posts = PostService.all();
})