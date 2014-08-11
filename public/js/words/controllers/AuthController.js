angular.module('words.controllers.AuthController', [])

.controller('AuthController', function($scope, $http, $window) {
    $scope.credentials = {
        email: '',
        password: ''
    };

    $scope.submit = function() {
        console.log($scope.credentials);

        $http.post('/login', $scope.credentials)
        .success(function(data, status, headers, config) {
            $window.sessionStorage.token = data.token;
            console.log(data);
        })
        .error(function(data, status, headers, config) {
            delete $window.sessionStorage.token;
            console.log(data);
        });
    };
});