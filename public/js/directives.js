angular.module('words.directives', [])

.directive('wordsMultiPost', function() {
    return {
        restrict: 'A',
        templateUrl: '/templates/directive/multi-post.html',
    }
})

.directive('wordsSinglePost', function() {
    return {
        restrict: 'A',
        templateUrl: '/templates/directive/single-post.html'
    }
});