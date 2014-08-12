angular.module('words.controllers.NavController', [])

.controller('NavController', function($scope, $rootScope, AuthService, Session) {

    $scope.user = Session.user;

    $rootScope.$on('auth-login', function() {
        $scope.user = Session.user;
    });

    $rootScope.$on('auth-logout', function() {
        $scope.user = null;
    });

    $scope.loggedIn = function() {
        return Session.isAuthenticated();
    };

    $scope.logout = function() {
        AuthService.logout();
    };
})