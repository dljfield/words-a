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
})

.directive('wordsMarkdown', function() {
    return {
        restrict: 'E',
        template: '<div></div>',
        replace: true,
        link: function($scope, element, attrs) {
            attrs.$observe('content', function(value) {
                var showdown = new Showdown.converter();
                element.removeAttr('content');
                element.html(showdown.makeHtml(value));
            });
        }
    }
})