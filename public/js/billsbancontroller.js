var app = angular.module('myapp', ['ui.bootstrap']); //tao 1 module
app.controller('billsbancontroller', function($scope, $http) { //tao 1 controller
    $scope.currentPage = 1;
    $scope.itemsPerPage = 5;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    };
    $http({
        method: "GET",
        url: "http://localhost:8000/api/billsbans"
    }).then(function(response) {
        console.log(response.data);
        $scope.billsbanss = response.data;
    });
});