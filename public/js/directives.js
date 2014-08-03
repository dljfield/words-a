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

// Works but isn't pretty because the attribute remains on the DOM.
// This is going to be very undesirable in a full post!
.directive('wordsMarkdown', function() {
    return {
        restrict: 'E',
        template: '<div></div>',
        replace: true,
        link: function($scope, element, attrs) {
            attrs.$observe('content', function(value) {
                var showdown = new Showdown.converter();
                element.html(showdown.makeHtml(value));
            });
        }
    }
})