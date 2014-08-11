angular.module('words.interceptors.AuthInterceptor', [])

.factory('AuthInterceptor', function($q, Session) {
    return {
        request: function(config) {
            config.headers = config.headers || {};

            if (Session.token) {
                config.headers.Authorization = Session.token;
            }

            return config;
        },
        response: function(response) {
            if (response.status === 401) {
                console.log("401 Error!");
            }
            return response || $q.when(response);
        }
    }
})