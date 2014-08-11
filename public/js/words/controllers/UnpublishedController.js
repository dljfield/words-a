angular.module('words.controllers.UnpublishedController', [])

.controller('UnpublishedController', function($scope, $http) {

    $scope.test = function() {
        $http.get('/posts/unpublished')
            .success(function(data, status, headers, config) {
                console.log(data);
            })
            .error(function(data, status, headers, config) {
                console.log(data);
            })
    }

})