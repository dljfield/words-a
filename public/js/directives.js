angular.module('words.directives', [])

.directive('wordsPost', function() {
    return {
        restrict: 'A',
        templateUrl: '/templates/directive/post.html',
    }
});