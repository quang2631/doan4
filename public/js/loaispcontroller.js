var app = angular.module('myapp', ['ui.bootstrap']); //tao 1 module
app.controller('loaispcontroller', function($scope, $http) { //tao 1 controller
    $scope.currentPage = 1;
    $scope.itemsPerPage = 5;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    };
    $http({
        method: "GET",
        url: "http://localhost:8000/api/loaisps"
    }).then(function(response) {
        console.log(response.data);
        $scope.loaispss = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm thương hiệu";
           if ($scope.loaisp){          
            $scope.loaisp.tenloai="";
            $scope.loaisp.Delet="";
           }
        } else {
            $scope.modalTitle = "Sửa thương hiệu";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/loaisps/" + id
            }).then(function(response) {
                $scope.loaisp = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/loaisps/" + id
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
                url: "http://localhost:8000/api/loaisps",
                data: $scope.loaisp,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/loaisps/" + $scope.id,
                data: $scope.loaisp,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});