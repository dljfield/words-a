<!DOCTYPE html>
<html lang="en" ng-app="words">
<head>
    <meta charset="UTF-8">
    <title>thedebonair/words</title>
</head>
<body>

    <div ui-view="viewA"></div>
    <div ui-view="viewB"></div>
    <!-- Also a way to navigate -->
    <a ui-sref="route1">Route 1</a>
    <a ui-sref="route2">Route 2</a>


    <!-- ANGULAR -->
    <script src="js/bower_components/angular/angular.js"></script>
    <script src="js/bower_components/angular-ui-router/release/angular-ui-router.js"></script>

    <!-- WORDS.APP -->
    <script src="js/words/app.js"></script>

</body>
</html>