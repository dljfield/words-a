angular.module('words.services.AuthService', [])

.factory('AuthService', function($http, Session) {

    this.login = function(credentials) {
        return $http
        .post('/login', credentials)
        .success(function(data, status, headers, config) {
            Session.create({} /* replace with some actual user information */, data.token);
            console.log(data);
        })
        .error(function(data, status, headers, config) {
            Session.destroy();
            console.log(data);
        });
    };

    this.isAuthenticated = function() {
        return Session.isAuthenticated();
    };

    return this;

})