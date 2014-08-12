angular.module('words.services.AuthService', [])

.factory('AuthService', function($rootScope, $http, Session) {

    this.login = function(credentials) {
        return $http
        .post('/login', credentials)
        .success(function(data, status, headers, config) {
            Session.create(data.user, data.token);
            console.log(data);
            $rootScope.$broadcast('auth-login');
        })
        .error(function(data, status, headers, config) {
            Session.destroy();
            console.log(data);
        });
    };

    this.logout = function() {
        Session.destroy();
        $rootScope.$broadcast('auth-logout');
    }

    this.isAuthenticated = function() {
        return Session.isAuthenticated();
    };

    return this;

})