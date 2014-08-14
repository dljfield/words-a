angular.module('words.controllers.UnpublishedController', [])

.controller('UnpublishedController', function($scope, $http, PostService) {

    $scope.posts = PostService.unpublished();

})