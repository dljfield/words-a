angular.module('words.controllers.CreatePostController', [])

.controller('CreatePostController', function($scope, PostService) {
    $scope.post = {
        title: '',
        body: '',
        summary: ''
    };

    $scope.savePost = function() {
        PostService.save($scope.post);
    };
})