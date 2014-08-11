angular.module('words.services.Session', [])

.service('Session', function($window) {

    this.create = function(user, token) {
        $window.sessionStorage.token = token;
        this.user = user;
    };

    this.destroy = function() {
        delete $window.sessionStorage.token;
        this.user = null;
    };

    this.isAuthenticated = function() {
        return !!this.user;
    };

    this.getToken = function() {
        return $window.sessionStorage.token;
    };

    return this;
})