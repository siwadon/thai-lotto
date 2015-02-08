var app = angular.module('Lotto', ['ngMaterial'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

app.config(function($mdThemingProvider) {
    $mdThemingProvider.theme('default')
        .primaryPalette('red')
        .accentPalette('green');
});

app.controller('LottoController', [ '$scope', '$http', '$window', '$location', function($scope, $http, $window, $location) {
    $scope.prizes = $window.initialData;

    $scope.get_result = function() {
        $scope.loading = true;
        $http.get('/api/result/' + $scope.selected_date)
            .success(function(data) {
                $scope.prizes = data;
                $location.path($scope.selected_date);
                $scope.loading = false;
            })
            .error(function(data) {
                $scope.loading = false;
            });

    };

    $http.get('/api/dates').success(function(data){
        $scope.dates = data;
    });
}]);
