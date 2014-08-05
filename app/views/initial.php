<!doctype html>
<html lang="en" ng-app="words">
<head>
    <meta charset="UTF-8">
    <title>thedebonair/words</title>

    <!-- STYLES -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body ng-controller="ApplicationController">

    <div class="container">

    <nav>
        <h1>thedebonair/words</h1>
        <ul>
            <li><a href="/#/about">About</a></li>
        </ul>
    </nav>



    <div ng-view></div>

    </div>

    <!-- ANGULAR -->
    <script src="js/bower_components/angular/angular.js"></script>
    <script src="js/bower_components/angular-route/angular-route.js"></script>
    <script src="js/bower_components/angular-resource/angular-resource.js"></script>

    <!-- LIB -->
    <script src="js/bower_components/showdown/compressed/showdown.js"></script>

    <!-- APP -->
    <script src="js/app.js"></script>
    <script src="js/controllers.js"></script>
    <script src="js/directives.js"></script>
    <script src="js/services.js"></script>

</body>
</html>
