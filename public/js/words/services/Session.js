angular.module('words.services.Session', [])

.service('Session', function() {

    this.create = function(user, token) {
        this.token = token;
        this.user = user;
    };

    this.destroy = function() {
        delete this.token;
        this.user = null;
    };

    this.isAuthenticated = function() {
        return !!this.user;
    }

    this.getToken = function() {
        return this.token;
    }

    return this;
})