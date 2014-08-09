<!DOCTYPE html>
<html lang="en" ng-app="words">
<head>
    <meta charset="UTF-8">
    <title>thedebonair/words</title>
    <base href="/">
</head>
<body>

    <div class="container">
        <nav>
            <h1>thedebonair/words</h1>
            <ul>
                <li><a ui-sref="home">Home</a></li>
                <li><a ui-sref="about">About</a></li>
                <li><a ui-sref="posts_create">New Post</a></li>
            </ul>
        </nav>

        <div ui-view></div>
    </div>

    <!-- ANGULAR -->
    <script src="js/bower_components/angular/angular.js"></script>
    <script src="js/bower_components/angular-ui-router/release/angular-ui-router.js"></script>

    <!-- WORDS.APP -->
    <script src="js/words/app.js"></script>

</body>
</html>