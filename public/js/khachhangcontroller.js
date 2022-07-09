var app = angular.module('myapp', ['ui.bootstrap']); //tao 1 module
app.controller('khachhangcontroller', function($scope, $http) { //tao 1 controller
    $scope.currentPage = 1;
    $scope.itemsPerPage = 5;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    };
    $http({
        method: "GET",
        url: "http://localhost:8000/api/khachhangs"
    }).then(function(response) {
        console.log(response.data);
        $scope.khachhangss = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm khách hàng";
           if ($scope.khachhang){          
            $scope.khachhang.ten_kh="";
            $scope.khachhang.dia_chi="";
            $scope.khachhang.email="";
            $scope.khachhang.sdt="";
            $scope.khachhang.note="";          
           }
        } else {
            $scope.modalTitle = "Sửa khách hàng";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/khachhangs/" + id
            }).then(function(response) {
                $scope.khachhang = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/khachhangs/" + id
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
                url: "http://localhost:8000/api/khachhangs",
                data: $scope.khachhang,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/khachhangs/" + $scope.id,
                data: $scope.khachhang,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});