var app = angular.module('myapp', ['ui.bootstrap']); //tao 1 module
app.controller('billdetailbancontroller', function($scope, $http) { //tao 1 controller
    $scope.currentPage = 1;
    $scope.itemsPerPage = 5;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    };
    $scope.ordered = function() {
        var url = window.location.pathname;
        $scope.bill_orderid = url.substring(url.lastIndexOf('/') + 1);
        $http({
            method: "GET",
            url: "http://localhost:8000/api/billdetailbans/" + $scope.bill_orderid
        }).then(function(response) {
            console.log(response.data);
            $scope.billdetailbanss = response.data;
        });
    }
});