angular.module('words.directives.PostList', [])

.directive('postList', function() {
    return {
        restrict: 'E',
        templateUrl: '/templates/directives/post-list.html',
        controller: 'PostListController'
    }
})