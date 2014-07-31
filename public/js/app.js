angular.module('words', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
    $routeProvider
    .when('/', {
        templateUrl: '/testview',
        controller: 'RouteTestController'
    });
}])

.controller('TestController', function($scope) {
    $scope.testData = {
        message: 'hello'
    };
})

.controller('RouteTestController', function($scope) {
    $scope.model = {
        someData: "figgle fuggle"
    };
});