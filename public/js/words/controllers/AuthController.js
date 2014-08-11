angular.module('words.controllers.AuthController', [])

.controller('AuthController', function($scope, $http) {
    $scope.credentials = {
        email: '',
        password: ''
    };

    $scope.submit = function() {
        console.log($scope.credentials);

        $http.post('/login', $scope.credentials)
        .success(function(data, status, headers, config) {
            console.log(data);
        })
        .error(function(data, status, headers, config) {
            console.log(data);
        });
    };
})