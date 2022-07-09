var app = angular.module('myApp', ['ui.bootstrap']);
app.controller('danhmuc', function($scope, $http) {
    $scope.currentPage = 1;
    $scope.itemsPerPage = 9;
    $scope.cata = function() {
        var url = window.location.pathname;
        $scope.id = url.substring(url.lastIndexOf('/') + 1);
        $http({
            method: "GET",
            url: "http://localhost:8000/api/danhmuc/"+$scope.id
        }).then(function(response) {
            console.log(response.data);
            $scope.products = response.data;
        });
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/loaisps"
    }).then(function(response) {
        console.log(response.data);
        $scope.brands = response.data;
    });
});
