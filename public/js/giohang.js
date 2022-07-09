var app = angular.module('myApp', []);
app.controller('giohang', function($scope, $http , $window) {
    $scope.listSP = [];
    $scope.total = 0;
    /*=================== Thao tác dữ liệu ==================================== */
    $scope.LoadCart = function () {
        $scope.listSP = JSON.parse(localStorage.getItem('cart'));
        $scope.listSP.forEach(function (item, i) {
            $scope.total += item.soluong
        });
    };
    $scope.LoadCart();
    $scope.CreateHoaDon = function () {
        let billsbans = {};
        billsbans.hoten = $('#bill_fullname').val();
        billsbans.diachi = $('#bill_address').val();
        billsbans.sodienthoai = $('#bill_phonenumber').val();
        billsbans.payment = $('#bill_payment').val();
        billsbans.tong_tien = $('#total1').val();
        billsbans.billdetail = [];
        $scope.listSP.forEach(function (item, i) {
    
            billsbans.billdetail.push({quantity: item.quantity,id : item.id,name : item.name});
        });
        $scope.LoadCart();
        //localStorage.clear();
        $http({
            method: "post",
            url: 'http://localhost:8000/api/billsbans',
            datatype: "json",
            data: billsbans
        }).then(function (response) {
            console.log(response.data)
            alert("Thanh toán thành công");
        });
    };
});
app.filter('total', function () {
    return function (input, property) {
        var i =  input.length;
        var total = 0;
        while (i--)
            total += input[i][property];
        return total;
    }
});
app.filter('total1', function () {
    return function (input, property) {
        var i =  input.length;
        var total1 = 0;
        while (i--)
            total1 += input[i][property];
        return total1;
    }
});
app.filter('total2', function () {
    return function (input, property) {
        var i =  input.length;
        var total2 = 0;
        while (i--)
            total2 += input[i][property];
        return total2;
    }
});
app.filter('total3', function () {
    return function (input, property) {
        var i =  input.length;
        var total3 = 0;
        while (i--)
            total3 += input[i][property];
        return total1;
    }
});
