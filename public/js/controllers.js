angular.module('words.controllers', [])

.controller('HomeController', function($scope, PostService) {
    $scope.posts = PostService.query();
})

.controller('PostController', function($scope) {
    $scope.post = {
        title: 'Test Single Post',
        body: 'No one really knows what it is that man the made choose this path, only that he had chosen it long ago and stuck with it.'
    }
});