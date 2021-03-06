var app = angular.module('myapp', ['ui.bootstrap']); //tao 1 module
app.controller('sanphamcontroller', function($scope, $http) {
    $scope.currentPage = 1;
    $scope.itemsPerPage = 5;
    $scope.sortBy = function (column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    }; //tao 1 controller
    $http({
        method: "GET",
        url: "http://localhost:8000/api/products"
    }).then(function(response) {
        console.log(response.data);
        $scope.product = response.data;

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
            $scope.modalTitle = "Add new product";
           if ($scope.product){          
            $scope.product.name="";
            $scope.product.unit_price="";
            $scope.product.mota_sp="";
            $scope.product.id_ncc="";
            $scope.product.image="";
            $scope.product.so_luong="";
            $scope.product.id_loai_sp="";
           
            
           }
        } else {
            $scope.modalTitle = "Edit product";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/products/" + id
            }).then(function(response) {
                $scope.product = response.data;
                $scope.product.id_loai_sp = $scope.product.id_loai_sp+'';
                $scope.product.id_ncc = $scope.product.id_ncc+'';
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
                data: $scope.product,
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
                data: $scope.product,
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
        document.getElementById('HINHANH').innerHTML = `<img src="/upload/sanpham/`+ files[0].name +`" alt="???nh" style="width:100%;height:100%">`;
        for(const file of files) {
            const {name, type, size, lastModified } = file;
            // L??m g?? ???? v???i c??c th??ng tin tr??n
            $scope.product.image = file.name;
            document.getElementById('HINHANH').innerHTML = `<img src="/upload/sanpham/`+ file.name +`" alt="???nh" style="width:100%;height:100%">`;
        };
    });
});