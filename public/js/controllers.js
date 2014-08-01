angular.module('words.controllers', [])

.controller('HomeController', function($scope) {
    $scope.home = {
        posts: [
            {
                title: 'Test Post Title',
                body: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.'
            },
            {
                title: 'Test Post Title 2',
                body: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.'
            }
        ]
    };
})

.controller('PostController', function($scope) {
    $scope.post = {
        title: 'Test Single Post',
        body: 'No one really knows what it is that man the made choose this path, only that he had chosen it long ago and stuck with it.'
    }
});