var app = angular.module('myapp', ['ui.bootstrap']); //tao 1 module
app.controller('nhacungcapcontroller', function($scope, $http) { //tao 1 controller
    $scope.currentPage = 1;
    $scope.itemsPerPage = 5;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    };
    $http({
        method: "GET",
        url: "http://localhost:8000/api/nhacungcaps"
    }).then(function(response) {
        console.log(response.data);
        $scope.nhacungcapss = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm nhà cung cấp";
           if ($scope.nhacungcap){          
            $scope.nhacungcap.ten_ncc="";
            $scope.nhacungcap.diachi_ncc="";
            $scope.nhacungcap.email="";
            $scope.nhacungcap.sdt="";
            $scope.nhacungcap.Delet="";
           }
        } else {
            $scope.modalTitle = "Sửa nhà cung cấp";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/nhacungcaps/" + id
            }).then(function(response) {
                $scope.nhacungcap = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/nhacungcaps/" + id
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
                url: "http://localhost:8000/api/nhacungcaps",
                data: $scope.nhacungcap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/nhacungcaps/" + $scope.id,
                data: $scope.nhacungcap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});