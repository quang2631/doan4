var app = angular.module('myapp', ['ui.bootstrap']); //tao 1 module
app.controller('nhanviencontroller', function($scope, $http) { //tao 1 controller
    $scope.currentPage = 1;
    $scope.itemsPerPage = 5;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    };
    $http({
        method: "GET",
        url: "http://localhost:8000/api/nhanviens"
    }).then(function(response) {
        console.log(response.data);
        $scope.nhanvienss = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm nhân viên";
           if ($scope.nhanvien){          
            $scope.nhanvien.ten_nhanvien="";
            $scope.nhanvien.quequan="";
            $scope.nhanvien.gioitinh="";
            $scope.nhanvien.ngaysinh="";
            $scope.nhanvien.sdt="";
            $scope.nhanvien.email="";
            $scope.nhanvien.capbac="";
           }
        } else {
            $scope.modalTitle = "Sửa nhân viên";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/nhanviens/" + id
            }).then(function(response) {
                $scope.nhanvien = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/nhanviens/" + id
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
                url: "http://localhost:8000/api/nhanviens",
                data: $scope.nhanvien,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/nhanviens/" + $scope.id,
                data: $scope.nhanvien,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});