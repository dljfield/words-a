angular.module('words.controllers.AuthController', [])

.controller('AuthController', function($scope, $http, $window, AuthService) {
    $scope.credentials = {
        email: '',
        password: ''
    };

    $scope.submit = function() {
        console.log($scope.credentials);

        AuthService.login($scope.credentials);
    };
});