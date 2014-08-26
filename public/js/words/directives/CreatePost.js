angular.module('words.directives.CreatePost', [])

.directive('createPost', function() {
    return {
        restrict: 'E',
        templateUrl: '/templates/directives/new-post-form.html'
    };
})