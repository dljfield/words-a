<!DOCTYPE html>
<html lang="en" ng-app="words">
<head>
    <meta charset="UTF-8">
    <title>thedebonair/words</title>
    <base href="/">
</head>
<body>

    <div class="container">
        <main-navigation></main-navigation>

        <div ui-view></div>
    </div>

    <!-- ANGULAR -->
    <script src="js/bower_components/angular/angular.js"></script>
    <script src="js/bower_components/angular-resource/angular-resource.js"></script>
    <script src="js/bower_components/angular-ui-router/release/angular-ui-router.js"></script>
    <script src="js/bower_components/showdown/src/showdown.js"></script>

    <!-- WORDS.APP -->
    <script src="js/words/app.js"></script>
    <script src="js/words/controllers/AuthController.js"></script>
    <script src="js/words/controllers/UnpublishedController.js"></script>
    <script src="js/words/controllers/NavController.js"></script>
    <script src="js/words/controllers/SinglePostController.js"></script>
    <script src="js/words/controllers/PostListController.js"></script>
    <script src="js/words/services/AuthService.js"></script>
    <script src="js/words/services/Session.js"></script>
    <script src="js/words/services/PostService.js"></script>
    <script src="js/words/directives/MainNavigation.js"></script>
    <script src="js/words/directives/PostList.js"></script>
    <script src="js/words/directives/SinglePost.js"></script>
    <script src="js/words/directives/Markdown.js"></script>
    <script src="js/words/interceptors/AuthInterceptor.js"></script>

</body>
</html>