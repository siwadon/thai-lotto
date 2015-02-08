var app = angular.module('Lotto', ['ngMaterial'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

app.config(function($mdThemingProvider) {
    $mdThemingProvider.theme('default')
        .primaryPalette('red')
        .accentPalette('green');
});

app.controller('DateController', [ '$scope', '$http', function($scope, $http) {
    $http.get('/api/dates').success(function(data){
        $scope.dates = data;
    });
}]);
