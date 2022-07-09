
<!DOCTYPE html>
<html lang="en"  ng-app="myapp" ng-controller="billsbancontroller">
<head>
  @include('admin.layout.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/admintheme/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
@include('admin.layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/admintheme/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/admintheme/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</span>
          </a></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      @include('admin.layout.slidebar')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-top:5px;padding-left:25px">
    <h1>ĐƠN HÀNG</h1>
    <div class="col-lg-6">
        <div class="form-group pull-left">
            <div style="display:flex; align-items:center; justify-content: space-between; width:1030px;">
                <div class="form-group" style="margin-top: 20px;">
                    Hiển Thị
                    <label>
                        <select class="form-select" ng-model="itemsPerPage" style="width: 77px;">
                            <option ng-value="1">1</option>
                            <option ng-value="2">2</option>
                            <option selected="selected" ng-value="5">5</option>
                            <option ng-value="10">10</option>
                            <option ng-value="25">25</option>
                            <option ng-value="50">50</option>
                        </select>                          
                    </label>
                </div>
                <div class="form-group"style="margin-top: 20px;">
                    <label>
                        <input   type="text" placeholder="Tìm Kiếm..." class="form-control" ng-model="search" style="font-weight: normal" />
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div>
        <table class="table table-border">
            <thead>
                <tr>
                    <th>TT</th>
                    <th>Họ tên</th>
                    <th>Địa chỉ</th>
                    <th>SDT</th>                 
                    <th>Tổng tiền</th>
                             
                    <td></td>
                   
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="sp in billsbanss | filter:search | limitTo: itemsPerPage: (currentPage - 1) * itemsPerPage| orderBy: sortColumn: reverse ">
                    <td>@{{$index+1}}</td>
                    <td>@{{sp.hoten}}</td>                  
                    <td>@{{sp.diachi}}</td>
                    <td>@{{sp.sodienthoai}}</td>                  
                    <td>@{{sp.tong_tien}}</td>            
                   
                   
                     <td><a href="/admin/chitietdonhang/@{{sp.id}}">Chi tiết</a></td>                  
                </tr>
                <tr ng-if="!billsbanss || (billsbanss | filter: search).length == 0">
                    <td colspan="7" style="text-align: center">
                        Không Có Đơn Hàng Nào Để Hiển Thị
                    </td>
                </tr>

            </tbody>
        </table>
        <div class="row" sty>
            <div class="">
                <div class="pull-left" style="width: 100%;margin-top: 15px;">
                    <span style="color:black;margin-left:30px;">Trang: @{{currentPage}}/@{{numPages}}</span>
                    <ul style="float:right;margin-left:680px;"  class="pagination" uib-pagination="" total-items="billsbanss.length" items-per-page="itemsPerPage" ng-model="currentPage" max-size="4" boundary-links="true" num-pages="numPages" class="ng-untouched ng-valid ng-isolate-scope pagination ng-not-empty ng-dirty ng-valid-parse" role="menu"><li role="menuitem" ng-if="::boundaryLinks" ng-class="{disabled: noPrevious()||ngDisabled}" class="pagination-first ng-scope"><a href="" ng-click="selectPage(1, $event)" ng-disabled="noPrevious()||ngDisabled" uib-tabindex-toggle="" class="ng-binding">First</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
   

    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
    </script><!-- Content Header (Page header) -->
    
   

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin.layout.script')
<script src="/js/billsbancontroller.js">

</script>

</body>
</html>
