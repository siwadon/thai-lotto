var app = angular.module('Lotto', ['ngMaterial'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

app.config(function($mdThemingProvider) {
    $mdThemingProvider.theme('default')
        .primaryPalette('red')
        .accentPalette('green');
});

app.controller('LottoController', [ '$scope', '$http', '$window', function($scope, $http, $window) {
    $scope.prizes = $window.initialData;

    $http.get('/api/dates').success(function(data){
        $scope.dates = data;
    });
}]);
