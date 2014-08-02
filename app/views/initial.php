<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>thedebonair/words</title>

    <!-- STYLES -->
    <link rel="stylesheet" href="css/style.css">

    <!-- ANGULAR -->
    <script src="js/bower_components/angular/angular.js"></script>
    <script src="js/bower_components/angular-route/angular-route.js"></script>
    <script src="js/bower_components/angular-resource/angular-resource.js"></script>


</head>
<body ng-app="words">

    <div class="container">

    <nav>
        <h1>thedebonair/words</h1>
        <ul>
            <li><a href="/#/about">About</a></li>
        </ul>
    </nav>



    <div ng-view></div>

    </div>

    <!-- APP -->
    <script src="js/app.js"></script>
    <script src="js/controllers.js"></script>
    <script src="js/directives.js"></script>
    <script src="js/services.js"></script>

</body>
</html>
