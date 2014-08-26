angular.module('words.directives.MainNavigation', [])

.directive('mainNavigation', function() {
    return {
        restrict: 'E',
        templateUrl: '/templates/directives/navigation.html',
        controller: 'NavController'
    }
})