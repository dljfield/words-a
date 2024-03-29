angular.module('words.controllers.SinglePostController', [])

.controller('SinglePostController', function($scope, $stateParams, PostService) {
    $scope.post = PostService.single($stateParams.id);

    $scope.publish = function() {
        PostService.unpublished.publish($stateParams.id);
    };
})