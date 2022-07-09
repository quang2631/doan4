var app = angular.module('myapp', ['ui.bootstrap']); //tao 1 module
app.controller('spcontroller', function($scope, $http) {//tao 1 controller
    $scope.currentPage = 1;
    $scope.itemsPerPage = 5;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    }; 
    $http({
        method: "GET",
        url: "http://localhost:8000/api/products"
    }).then(function(response) {
        console.log(response.data);
        $scope.sanphamss = response.data;

        // console.log($scope.products);
    });
    $http(
        {
            method: "GET",
            url: "http://localhost:8000/api/loaisps"
        }
    ).then(function(response){
        $scope.loaisp = response.data;
        console.log(response.data);
    });
    $http(
        {
            method: "GET",
            url: "http://localhost:8000/api/nhacungcaps"
        }
    ).then(function(response){
        $scope.ncc = response.data;
        console.log(response.data);
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm sản phẩm";
           if ($scope.sanpham){          
            $scope.sanpham.name="";
            $scope.sanpham.unit_price="";
            $scope.sanpham.mota_sp="";
            $scope.sanpham.id_ncc="";
            $scope.sanpham.image="";
            $scope.sanpham.so_luong="";
            $scope.sanpham.id_loai_sp="";
           
            
           }
        } else {
            $scope.modalTitle = "Sửa sản phẩm";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/products/" + id
            }).then(function(response) {
                $scope.sanpham = response.data;
                $scope.sanpham.id_loai_sp = $scope.sanpham.id_loai_sp+'';
                $scope.sanpham.id_ncc = $scope.sanpham.id_ncc+'';
            });
          
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/products/" + id
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
                url: "http://localhost:8000/api/products",
                data: $scope.sanpham,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/products/" + $scope.id,
                data: $scope.sanpham,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
    const fileUpload = document.querySelector("#file-upload");
    fileUpload.addEventListener("change", (h) => {
        const files = h.target.files;
        document.getElementById('HINHANH').innerHTML = `<img src="/upload/sanpham/`+ files[0].name +`" alt="Ảnh" style="width:100%;height:100%">`;
        for(const file of files) {
            const {name, type, size, lastModified } = file;
            // Làm gì đó với các thông tin trên
            $scope.sanpham.image = file.name;
            document.getElementById('HINHANH').innerHTML = `<img src="/upload/sanpham/`+ file.name +`" alt="Ảnh" style="width:100%;height:100%">`;
        };
    });
});