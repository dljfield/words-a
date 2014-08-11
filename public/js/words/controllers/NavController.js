angular.module('words.controllers.NavController', [])

.controller('NavController', function($scope, AuthService, Session) {

    // the username reveals the need to have a broadcast handler
    // somewhere so that the UI can be properly updated when
    // a user logs in

    $scope.user = Session.user;

    $scope.loggedIn = function() {
        return Session.isAuthenticated();
    };

    $scope.logout = function() {
        AuthService.logout();
    };
})