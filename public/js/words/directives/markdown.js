angular.module('words.directives.Markdown', [])

.directive('markdown', function() {
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