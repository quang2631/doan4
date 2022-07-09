
<!DOCTYPE html>
<html lang="zxx" ng-app="myApp" ng-controller="chitietsanpham">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Web xe đạp điện</title>
    <link rel="icon" type="image/png" href="/teamplatehome/images/favicon.png">
    <link rel="stylesheet" href="/teamplatehome/css/bootstrap.css">
    <link rel="stylesheet" href="/teamplatehome/css/magnific-popup.min.css">
    <link rel="stylesheet" href="/teamplatehome/css/font-awesome.css">
    <link rel="stylesheet" href="/teamplatehome/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/teamplatehome/css/themify-icons.css">
    <link rel="stylesheet" href="/teamplatehome/css/niceselect.css">
    <link rel="stylesheet" href="/teamplatehome/css/animate.css">
    <link rel="stylesheet" href="/teamplatehome/css/flex-slider.min.css">
    <link rel="stylesheet" href="/teamplatehome/css/owl-carousel.css">
    <link rel="stylesheet" href="/teamplatehome/css/slicknav.min.css">
    <link rel="stylesheet" href="/teamplatehome/css/reset.css">
    <link rel="stylesheet" href="/teamplatehome/style.css">
    <link rel="stylesheet" href="/teamplatehome/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<style>
    body{background-color: #ecedee}
    .card{border: none;overflow: hidden}
    .thumbnail_images ul{list-style: none;justify-content: center;display: flex;align-items: center;margin-top:10px}
    .thumbnail_images ul li{margin: 5px;padding: 10px;border: 2px solid #eee;cursor: pointer;transition: all 0.5s}
    .thumbnail_images ul li:hover{border: 2px solid #000}
    .main_image{
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 1px solid #eee;
        height: 400px;width: 100%;overflow: hidden
    }
    .heart{
        height: 29px;
        width: 29px;
        background-color: #eaeaea;
        border-radius: 50%;
        display: flex;
        justify-content: center;align-items: center}
    .content p{font-size: 12px}
    .ratings span{font-size: 14px;margin-left: 12px}
    .colors{margin-top: 5px}
    .colors ul{list-style: none;display: flex;padding-left: 0px}
    .colors ul li{height: 20px;width: 20px;display: flex;border-radius: 50%;margin-right: 10px;cursor: pointer}
    .colors ul li:nth-child(1){background-color: #6c704d}
    .colors ul li:nth-child(2){background-color: #96918b}
    .colors ul li:nth-child(3){background-color: #68778e}
    .colors ul li:nth-child(4){background-color: #263f55}
    .colors ul li:nth-child(5){background-color: black}
    .right-side{position: relative}
    .search-option{
        position: absolute;
        background-color: #000;
        overflow: hidden;
        align-items: center;
        color: #fff;
        width: 200px;
        height: 200px;
        border-radius: 49% 51% 50% 50% / 68% 69% 31% 32%;
        left: 30%;
        bottom: -250px;
        transition: all 0.5s;cursor: pointer}
    .share{position: absolute;right: 20px;top: 22px}
    .buttons .btn{height: 50px;width: 150px;border-radius: 0px !important}
</style>
</head>
<body class="js" ng-init="detailpro()">
<!-- Preloader -->
{{-- <div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div> --}}
<header class="header shop">
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <!-- Top Left -->
              
                <!--/ End Top Left -->
            </div>
            <div class="col-lg-8 col-md-12 col-12">
                <!-- Top Right -->
                <div class="right-content">
                    <ul class="list-main">
                        <li><i class="ti-location-pin"></i> Store location</li>
                        <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
                        <li><i class="fas fa-sign-out-alt"></i><a href="/glammy/signin">Đăng Kí Tài Khoản</a></li>
                        <li><i class="fas fa-sign-in-alt"></i><a href="{{URL::to('/glammy/login')}}">Đăng Nhập</a></li>
                    </ul>
                </div>
                <!-- End Top Right -->
            </div>
        </div>
    </div>
</div>
<!-- End Topbar -->
<div class="middle-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-12">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="/upload/sanpham/logo.png" alt="logo"></a>
                </div>
                <!--/ End Logo -->
                <!-- Search Form -->
                <div class="search-top">
                    <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                    <!-- Search Form -->
                    <div class="search-top">
                        <form class="search-form">
                            <input type="text" placeholder="Search here..." name="search">
                            <button value="search" type="submit"><i class="ti-search"></i></button>
                        </form>
                    </div>
                    <!--/ End Search Form -->
                </div>
                <!--/ End Search Form -->
                <div class="mobile-nav"></div>
            </div>
            <div class="col-lg-8 col-md-7 col-12">
                <div class="search-bar-top">
                    <div class="search-bar">
                        <form>
                            <input name="search" placeholder="Search Products Here....." type="search">
                            <button class="btnn"><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-12">
                <div class="right-bar">
                    <!-- Search Form -->
                    <div class="sinlge-bar">
                        <a href="#" class="single-icon"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="sinlge-bar">
                        <a href="#" class="single-icon"><i class="far fa-user-circle"></i></a>
                    </div>
                    <div class="sinlge-bar shopping">
                        <a href="{{URL::to('/home/giohang')}}" class="single-icon"><i class="ti-bag"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li><a href="/home/index">Trang chủ</a></li>
                                            <li><a href="#">Sản phẩm</a></li>												
                                            <li><a href="#">Dịch vụ</a></li>												
                                            <li><a href="#">Hỗ trợ</a></li>																				
                                            <li><a href="#">Liên hệ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>

    <div class="container mt-5 mb-5"  style="max-width: 980px;">
        <div class="card"  ng-repeat="detailproduct in detailproduct">
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image" style="padding-left: 17px;">
                            <img src="/upload/sanpham/@{{detailproduct.image}}" id="main_product_image" width="350">
                            <div >
                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 style="margin-top: 4px;">@{{detailproduct.name}}</h3>
                             <span class="heart"><i style="margin-top: 3px;color: #8f0e38" class="fas fa-heart"></i></span>
                        </div>
                        <div class="ratings d-flex flex-row align-items-center" style="font-size: 10px;">
                            <div class="d-flex flex-row" style="color: #F7941D">
                                <i class='fas fa-star' ></i>
                                <i class='fas fa-star' ></i>
                                <i class='fas fa-star' ></i>
                                <i class='fas fa-star' ></i>
                                <i class='far fa-star' ></i>
                            </div>
                            <span style="font-size: 12px;">Justin Bieber</span>
                        </div>
                        <h4 style="color: #A00F0F; margin-top: 15px;margin-bottom: 20px;">@{{detailproduct.unit_price}}</h4>
                        <div style="font-size:25px;color:#CCC;display: inline-flex;margin-top: 10px;margin-bottom: 10px;">
                            <input style="width: 35px;height: 35px;background: #333;color: white;border-color: #333;" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" type='button' value='-' />
                            <input style="width: 50px;height: 35px;text-align: center;border: 3px solid #333;margin-left: -3px;" id='quantity' min='1' name='quantity' type='text' value='1' />
                            <input style="width: 35px;height: 35px;background: #333;color: white;margin-left: -2px;border-color: #333;" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' />
                        </div>
                        <div class="mt-3 pr-3 content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <br>
                        <div class="buttons d-flex flex-row mt-5 gap-3">
                            <a class="add_bag" ng-click="addToCart(detailproduct)" ><button style="margin-top: 0px;width: 200px;height: 53px;background: #333;border:3px solid #333;color: white;font-size: 15px;"><i class="fa fa-shopping-cart"></i> Add To Bag</button></a>
                            <a class="add_lovelist" href="javascript:void(0);" ><button style="margin-top: 0px;margin-left: 20px;background: white;width: 70px;height: 53px;border:3px solid #333;color: black;font-size: 15px;"><i class="fa fa-heart"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Mô tả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Thông tin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Đánh giá</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            @{{detailproduct.mota_sp }}                        </div>
                            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                Original Levi 501 <br>
                                Button fly<br>
                                Regular fit<br>
                                waist 28"-32 =16"hem<br>
                                waist 33" = 17" hem<br>
                                waist 34"-40"=18" hem<br>
                                Levi's have started to introduce the red tab with just the (R) (registered trade mark) on the red tab<br><br>

                                Size Details:<br>
                                All sizes from 28-40 waist<br>
                                Leg length 30", 32", 34", 36"                        </div>
                            <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                Day la danh gia
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="index.html"><img src="/teamplatehome/images/logo2.png" alt="#"></a>
                        </div>
                        
                        <p class="call">Có câu hỏi? Gọi cho chúng tôi 24/7<span><a href="tel:123456789">0123 456 789</a></span></p>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Thông tin</h4>
                        <ul>
                            <li><a href="#">Về chúng tôi</a></li>
                            <li><a href="#">Câu hỏi thường gặp</a></li>
                            <li><a href="#">Điều khoản và điều kiện</a></li>
                            <li><a href="#">Liên hệ chúng tôi</a></li>
                            <li><a href="#">Trợ giúp</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Dịch vụ khách hàng</h4>
                        <ul>
                            <li><a href="#">Phương thức thanh toán</a></li>
                            <li><a href="#">Hoàn tiền</a></li>
                            <li><a href="#">Lợi nhuận</a></li>
                            <li><a href="#">Đang chuyển hàng</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer social">
                        <h4>Get In Tuch</h4>
                        <!-- Single Widget -->
                        <div class="contact">
                            <ul>
                                <li>Phù Cừ - Hưng Yên</li>
                                
                                <li>xedien@gmail.com</li>
                                <li>032 3456 7890</li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-flickr"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->
    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left">
                            <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right">
                            <img src="/teamplatehome/images/payments.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{!! asset('/teamplatehome/js/jquery.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/jquery-ui.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/popper.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/bootstrap.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/colors.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/slicknav.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/owl-carousel.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/magnific-popup.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/waypoints.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/finalcountdown.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/nicesellect.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/flex-slider.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/scrollup.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/onepage-nav.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/easing.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/active.js')!!}"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{!! asset('/js/angular.min.js')!!}"></script>
<script src="{!! asset('/js/chitietsanpham.js')!!}"></script>
<script src="{!! asset('/js/ui-bootstrap-tpls.min.js')!!}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function changeImage(element) {
        var main_prodcut_image = document.getElementById('main_product_image');
        main_prodcut_image.src = element.src;
    }
</script>
<script>
    $(document).ready(function () {
        $(".cong1").click(function () {
            var amount = $(this).prev().attr("value");
            $(this).prev().attr("value", Number(amount) + 1);
        });
        $(".tru1").click(function () {
            var amount = $(this).next().attr("value");
            if (Number(amount) > 1)
                $(this).next().attr("value", Number(amount) - 1);
        });
    });
</script>
<script>
    $(function(){
        $('select').select2({
            placeholder: {
                id: '-1', // the value of the option
                text: 'Select an option'
            }
        });
    })
</script>
</body>
</html>
