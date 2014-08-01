angular.module('words.directives', [])

.directive('wordsPost', function() {
    return {
        restrict: 'A',
        templateUrl: '/template/post'
    }
});