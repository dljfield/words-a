angular.module('words.interceptors.AuthInterceptor', [])

.factory('AuthInterceptor', function($q, $window) {
    return {
        request: function(config) {
            config.headers = config.headers || {};

            if ($window.sessionStorage.token) {
                config.headers.Authorization = $window.sessionStorage.token;
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