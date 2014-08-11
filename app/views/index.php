<!DOCTYPE html>
<html lang="en" ng-app="words">
<head>
    <meta charset="UTF-8">
    <title>thedebonair/words</title>
    <base href="/">
</head>
<body>

    <div class="container">
        <!-- Pull this out into a directive -->
        <nav ng-controller="NavController">
            <h1>thedebonair/words</h1>
            <ul>
                <li><a ui-sref="home">Home</a></li>
                <li><a ui-sref="about">About</a></li>
                <li ng-if="loggedIn()"><a ui-sref="posts_create">New Post</a></li>
                <li ng-switch on="loggedIn()">
                    <a ui-sref="login" ng-switch-when="false">Log In</a>
                    <a href="#" on-click="logout()" ng-switch-when="true">Log Out</a>
                </li>
                <li ng-if="user">Hello, {{ user.name }}.</li>
            </ul>
        </nav>

        <div ui-view></div>
    </div>

    <!-- ANGULAR -->
    <script src="js/bower_components/angular/angular.js"></script>
    <script src="js/bower_components/angular-ui-router/release/angular-ui-router.js"></script>

    <!-- WORDS.APP -->
    <script src="js/words/app.js"></script>
    <script src="js/words/controllers/AuthController.js"></script>
    <script src="js/words/controllers/UnpublishedController.js"></script>
    <script src="js/words/controllers/NavController.js"></script>
    <script src="js/words/services/AuthService.js"></script>
    <script src="js/words/services/Session.js"></script>
    <script src="js/words/interceptors/AuthInterceptor.js"></script>

</body>
</html>