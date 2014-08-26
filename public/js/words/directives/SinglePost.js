angular.module('words.directives.SinglePost', [])

.directive('singlePost', function() {
    return {
        restrict: 'E',
        templateUrl: '/templates/directives/single-post.html',
    }
})