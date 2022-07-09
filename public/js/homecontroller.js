var app = angular.module('myApp', ['ui.bootstrap']);
app.controller('homecontroller', function($scope, $http) {
    $scope.currentPage = 1;
    $scope.itemsPerPage = 8;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    }; //tao 1 controller
    $http({
        method: "GET",
        url: "http://localhost:8000/api/home"
    }).then(function(response) {
        console.log(response.data);
        $scope.products = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/loaisps"
    }).then(function(response) {
        console.log(response.data);
        $scope.loaisps = response.data;
    });
})