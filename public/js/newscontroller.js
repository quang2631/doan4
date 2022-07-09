var app = angular.module('myapp', ['ui.bootstrap']); //tao 1 module
app.controller('newscontroller', function($scope, $http) { //tao 1 controller
    $scope.currentPage = 1;
    $scope.itemsPerPage = 5;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    };
    $http({
        method: "GET",
        url: "http://localhost:8000/api/newss"
    }).then(function(response) {
        console.log(response.data);
        $scope.newsss = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm tin tức";
           if ($scope.news){          
            $scope.news.title="";
            $scope.news.content="";
           }
        } else {
            $scope.modalTitle = "Sửa tin tức";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/newss/" + id
            }).then(function(response) {
                $scope.news = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/newss/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $http({
                method: "POST",
                url: "http://localhost:8000/api/newss",
                data: $scope.news,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/newss/" + $scope.id,
                data: $scope.news,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});