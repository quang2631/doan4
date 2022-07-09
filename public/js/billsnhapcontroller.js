var app = angular.module('myapp', []); //tao 1 module
app.controller('billsnhapcontroller', function($scope, $http) { //tao 1 controller
    $http({
        method: "GET",
        url: "http://localhost:8000/api/billsnhaps"
    }).then(function(response) {
        console.log(response.data);
        $scope.billsnhaps = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new billsnhap";
           if ($scope.billsnhap){          
            $scope.billsnhap.id_ncc="";
            $scope.billsnhap.tong_tien="";
           }
        } else {
            $scope.modalTitle = "Edit billsnhap";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/billsnhaps/" + id
            }).then(function(response) {
                $scope.billsnhap = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("nhap co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/billsnhaps/" + id
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
                url: "http://localhost:8000/api/billsnhaps",
                data: $scope.billsnhap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/billsnhaps/" + $scope.id,
                data: $scope.billsnhap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});