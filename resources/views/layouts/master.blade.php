<html ng-app="Lotto">
<head>
    <title ng-bind="'Lottery result on ' + (result_date | date)">Lottery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/angular_material/0.7.1/angular-material.min.css">
    <link rel="stylesheet" href="{{ asset('css/lotto.css') }}">
    <base href="/">
</head>
<body>
    <div class="container" ng-controller="LottoController" layout="column" flex layout-fill>
        @yield('content')
    </div>

    <!-- Angular Material Dependencies -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.10/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.10/angular-animate.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.10/angular-aria.min.js"></script>
    <script src="/js/lotto.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angular_material/0.7.1/angular-material.min.js"></script>
</body>
</html>
