angular.module('words.services', ['ngResource'])

.factory('PostService', ['$resource', function($resource) {
    return $resource('/posts/:id', {
        id: '@id'
    });
}])

.factory('AuthService', ['$http', 'Session', function($http, Session) {
    var authService = {};

    authService.login = function(credentials) {
        return $http
        .post('/login', credentials)
        .success(function(data, status, headers, config) {
            // Session.create(data.id, data.user.id);

            console.log(data);

            // $http
            // .post('/login/testing', data)
            // .then(function(res){
            //     console.log(res);
            // });

            var user = {email: credentials.email, token: data.token};

            return user;
        })
        .error(function(data, status, headers, config) {
            alert(status);
        });
    };

    authService.isAuthenticated = function() {
        return !!Session.userId;
    };

    return authService;
}])

.service('Session', function() {
    this.create = function(sessionId, userId) {
        this.id     = sessionId;
        this.userId = userId;
    };

    this.destroy = function() {
        this.id = null;
        this.userId = null;
    }

    return this;
})