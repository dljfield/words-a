angular.module('words.services.Session', [])

.service('Session', function($window) {

    this.create = function(user, token) {
        this.token = token;
        this.user = user;
    };

    this.destroy = function() {
        this.token = null;
        this.user = null;
    };

    this.isAuthenticated = function() {
        return !!this.user;
    };

    this.getToken = function() {
        return this.token;
    };

    return this;
})