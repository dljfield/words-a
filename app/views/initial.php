<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Initial Page</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="js/bower_components/angular/angular.min.js"></script>
    <script src="js/bower_components/angular-route/angular-route.min.js"></script>

</head>
<body ng-app="words">
    <h1>Initial Page</h1>

    <div ng-controller="TestController">
        {{ testData.message }}
    </div>

    <div ng-view></div>

    <!-- ANGULAR -->
    <script src="js/app.js"></script>

</body>
</html>
