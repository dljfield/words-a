angular.module('words.controllers.UnpublishedController', [])

.controller('UnpublishedController', function($scope, PostService) {
    $scope.posts = PostService.unpublished.all();
})