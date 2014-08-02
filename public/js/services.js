angular.module('words.services', ['ngResource'])

.factory('PostService', ['$resource', function($resource) {
    return $resource('/posts/:id', {
        id: '@id'
    }, {
        get: {
            method: 'GET'
        }
    });
}]);