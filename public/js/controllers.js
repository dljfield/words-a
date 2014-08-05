angular.module('words.controllers', [])

.controller('ApplicationController', function($scope) {
    $scope.currentUser = null;

    $scope.setCurrentUser = function(user) {

        var newUser = {
            'email': user.data.email,
            'token': user.data.token
        }

        $scope.currentUser = newUser;
    }
})

.controller('HomeController', function($scope, PostService) {
    $scope.posts = PostService.query();
})

.controller('LoginController', function($scope, AuthService) {
    $scope.credentials = {
        email: '',
        password: ''
    };

    $scope.login = function(credentials) {
        AuthService.login(credentials).then(function(user) {
            // $broadcast the application that we're logged in
            $scope.setCurrentUser(user);
        });
    };
})

.controller('PostController', function($scope, $routeParams, PostService) {
    $scope.post = PostService.get({id: $routeParams.id});
})

.controller('CreatePostController', function($scope, PostService) {

    $scope.post = {
        title: '',
        body: '',
        summary: ''
    }

    $scope.savePost = function() {
        PostService.save({}, {
            title: $scope.post.title,
            body: $scope.post.body,
            summary: $scope.post.summary
        }, function(success) {
            alert('Success')
        }, function(error) {
            alert(error.data.message);
        });
    }

})