angular.module('words.controllers', [])

.controller('HomeController', function($scope, PostService) {
    $scope.posts = PostService.query();
})

.controller('PostController', function($scope, $routeParams, PostService) {
    $scope.post = PostService.get({id: $routeParams.id});
})

.controller('CreatePostController', function($scope, PostService) {

    $scope.post = {
        title: '',
        body: '',
        summary: ''
    }

    $scope.savePost = function() {
        PostService.save({}, {
            title: $scope.post.title,
            body: $scope.post.body,
            summary: $scope.post.summary
        }, function(success) {
            alert('Success')
        }, function(error) {
            alert('Error')
        });
    }

})