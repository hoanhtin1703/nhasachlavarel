<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang Quản Trị</title>



  {{-- CKeditor --}}<link rel="stylesheet" href="{{asset('https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css')}}">
  {{-- <script src="{{asset('//cdn.ckeditor.com/4.16.2/standard/ckeditor.js')}}"></script> --}}

 {{-- Bootstrap 5 --}}
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{asset('public/backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/plugins/toastr/toastr.min.css')}}">
{{--  --}}
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">
</head>


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">

    <img class="animation__shake" src="{{asset('public/newfrontend/assets/images/demos/demo-20/bestie1.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> --}}
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{URL::to('/dashboard')}}" class="brand-link">
      <img src="{{asset('public/newfrontend/assets/images/demos/demo-20/bestie1.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> Trang Quản Trị</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="http://windows79.com/wp-content/uploads/2021/02/Thay-the-hinh-dai-dien-tai-khoan-nguoi-dung-mac.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
@if (Session::get('admin_id'))

<a href="{{URL::to('/show-profile-admin/'.Session::get('admin_id'))}}" class="d-block">
@else
<a href="#" class="d-block"
@endif


                @if (Session::get('level')==0)
                   {{Session::get('admin_name')}}(Admin)
                @else
                {{Session::get('admin_name')}}(Nhân viên)
                @endif
              </a>


        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{URL::to('/dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Trang Chủ
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/show-category')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
             Quản Lý Danh Mục Sản Phẩm

              </p>
            </a>
          </li>
          @if (Session::get('admin_id'))
          <li class="nav-item">
            <a href="{{URL::to('/show-customer')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
             Quản Lý Tài Khoản
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a href="{{URL::to('/show-category_type')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Quản Lý Danh Mục Thể Loại

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/order')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
               Quản lý Hoá Đơn

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/show-product')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Quản Lý Sản Phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/show-counpon')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Quản Lý Mã Giảm Giá
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/show-banner')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Quản Lý Banner

              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{URL::to('/show-delivery')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
               Quản Lý Phí Vận Chuyển

              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{URL::to('/show-comment')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
               Quản Lý Bình Luận & Đánh Giá

              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{URL::to('/show-blog')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
               Quản Lý Bài Viết

              </p>
            </a>

          </li>
          <li class="nav-item mt-4">
            <a href="{{URL::to('/logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
              Đăng Xuất

              </p>
            </a>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
{{-- end Sidebar --}}
  <!-- Content Wrapper. Contains page content -->
  @yield('admin_content')
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>



<!-- ./wrapper -->
<script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('public/backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('public/backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('public/backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backend/dist/js/adminlte.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/esm/popper.min.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="{{asset('public/backend/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/pdfmake/vfs_fonts.js')}}"></script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="{{asset('public/backend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/toastr/toastr.min.js')}}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
{{-- đănng nhập --}}
<script>
$(document).ready( function () {
    $('#Table1').DataTable();
    $('#Table2').DataTable();
    $('#Table4').DataTable();
} );</script>
 <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
     CKEDITOR.replace('ckeditor');
     CKEDITOR.replace('ckeditor1');
     CKEDITOR.replace('ckeditor2');
     CKEDITOR.replace('ckeditor3');
     CKEDITOR.replace('id4');
</script>
<script>
       $('.update_quantity_order').click(function(){
        var order_product_id = $(this).data('product_id');
        var order_qty = $('.order_qty_'+order_product_id).val();
        var order_code = $('.order_code').val();
        var _token = $('input[name="_token"]').val();
        // alert(order_product_id);
        // alert(order_qty);
        // alert(order_code);
        $.ajax({
                url : '{{url('/update-qty')}}',

                method: 'POST',

                data:{_token:_token, order_product_id:order_product_id ,order_qty:order_qty ,order_code:order_code},
                // dataType:"JSON",
                success:function(data){

                    $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    toastr.success('Cập Nhật Thành Công.')
  });

  window.setTimeout(function(){
                            location.reload();
                        } ,500);
                }
        });

    });
</script>
<script type="text/javascript">
    $('.order_details').change(function(){
        var order_status = $(this).val();
        var order_id = $(this).children(":selected").attr("id");
        var _token = $('input[name="_token"]').val();
        var sumtotal  = $('input[name="sum"]').val();
        var order_detail_id = $('input[name="order_detail_id"]').val();
        //lay ra so luong
        quantity = [];
        $("input[name='product_sales_quantity']").each(function(){
            quantity.push($(this).val());
        });
        //lay ra product id
        order_product_id = [];
        $("input[name='order_product_id']").each(function(){
            order_product_id.push($(this).val());
        });
        j = 0;
        for(i=0;i<order_product_id.length;i++){
            //so luong khach dat
            var order_qty = $('.order_qty_' + order_product_id[i]).val();
            //so luong ton kho
            var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();

            if(parseInt(order_qty)>parseInt(order_qty_storage)){
                j = j + 1;
                if(j==1){
                    alert('Số lượng bán trong kho không đủ');
                }
                $('.color_qty_'+order_product_id[i]).css('background','#000');
            }
        }
        if(j==0){

                $.ajax({
                        url : '{{url('/update-order-qty')}}',
                            method: 'POST',
                            data:{_token:_token, order_status:order_status ,order_id:order_id ,quantity:quantity, order_product_id:order_product_id,sumtotal:sumtotal,order_detail_id:order_detail_id},
                            success:function(data){
                                $(function() {
                                    var Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000
                                    });

                                    toastr.success('Thay Đổi Thạng Thái Đơn Hàng Thành Công.')
                                });

                                window.setTimeout(function(){
                                    window.location.href = "{{url('/order')}}"
                                    } ,500);
                            }
                });

        }

    });
</script>
<script type="text/javascript">
   $(document).ready(function(){

fetch_delivery();

function fetch_delivery(){
    var _token = $('input[name="_token"]').val();
     $.ajax({
        url : '{{url('/select-feeship')}}',
        method: 'POST',
        data:{_token:_token},
        success:function(data){
           $('#load_delivery').html(data);
        }
    });
}
$(document).on('blur','.fee_feeship_edit',function(){

    var feeship_id = $(this).data('feeship_id');
    var fee_value = $(this).text();
     var _token = $('input[name="_token"]').val();
    // alert(feeship_id);
    // alert(fee_value);
    $.ajax({
        url : '{{url('/update-delivery')}}',
        method: 'POST',
        data:{feeship_id:feeship_id, fee_value:fee_value, _token:_token},
        success:function(data){
           fetch_delivery();
           $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    toastr.success('Cập Nhật Thành Công.')
  });
        }
    });

});
$('.add_delivery').click(function(){

   var city = $('.city').val();
   var province = $('.province').val();
   var wards = $('.wards').val();
   var fee_ship = $('.fee_ship').val();
    var _token = $('input[name="_token"]').val();
   // alert(city);
   // alert(province);
   // alert(wards);
   // alert(fee_ship);
    $.ajax({
        url : '{{url('/insert-delivery')}}',
        method: 'POST',
        data:{city:city, province:province, _token:_token, wards:wards, fee_ship:fee_ship},
        success:function(data){
           fetch_delivery();
           $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    toastr.success('Thêm Thành Công.')
  });
        }

    });


});
$('.choose').on('change',function(){
    var action = $(this).attr('id');
    var ma_id = $(this).val();
    var _token = $('input[name="_token"]').val();
    var result = '';
    // alert(action);
    //  alert(matp);
    //   alert(_token);

    if(action=='city'){
        result = 'province';
    }else{
        result = 'wards';
    }
    $.ajax({
        url : '{{url('/select-delivery')}}',
        method: 'POST',
        data:{action:action,ma_id:ma_id,_token:_token},
        success:function(data){
           $('#'+result).html(data);
        }
    });
});
})
    </script>
    <script>
    $(document).ready(function() {
        $('.add_counpon').on('click', function(e) {
            e.preventDefault();
            var counpon_name = $('.counpon_name').val();
            var counpon_code = $('.counpon_code').val();

            var price_discount = $('.price_discount').val();
            var counpun_status = $('.counpun_status').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{url('/add-counpon')}}',
                method: 'POST',
                data: {
                    counpon_name: counpon_name,
                    counpon_code: counpon_code,
                    price_discount: price_discount,
                    counpun_status: counpun_status,
                    _token: _token
                },
                success: function(data) {
                    $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        toastr.success('Thêm Thành Công.')
                    });        window.setTimeout(function(){
                                    window.location.href = "{{url('/show-counpon')}}"

                                    } ,500);
                }
            })
        })

    })
    </script>
    <script>
        $(document).ready(function() {
            $('.edit_counpon').on('click', function(e) {
            e.preventDefault();
            var id = $(this).data('id_counpon');
            var counpon_name = $('.counpon_name').val();
            var counpon_code = $('.counpon_code').val();
            var price_discount = $('.price_discount').val();
            var counpun_status = $('.counpun_status').val();
            var _token = $('input[name="_token"]').val();

            $.ajax({

                url: '{{url('/update-counpon')}}',
                method: 'POST',
                data: {
                    counpon_name: counpon_name,
                    counpon_code: counpon_code,
                    price_discount: price_discount,
                    counpun_status: counpun_status,
                    id:id,
                    _token: _token
                },
                success: function(data) {
                    $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        toastr.success('Chỉnh Sửa Thành Công.')
                    });
                    window.setTimeout(function(){
                                    window.location.href = "{{url('/show-counpon')}}"
                                    } ,500);
                }
            })
        })
        })
    </script>
    <script>
        $(document).ready(function() {
            $('.delete_coupon').click(function() {

            var id = $(this).data('id_counpon');
            var _token = $('input[name="_token"]').val();
            var url = '{{url('/delete-counpon')}}';
        var dltUrl = url+ "/" +id;

            $.ajax({

                url: dltUrl ,
                method: 'POST',
                data: {
                    id:id,
                    _token:_token,
                },
                success: function(data) {
                    $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        toastr.success('Xoá Thành Công.')
                    });
                    window.setTimeout(function(){
                                    window.location.href = "{{url('/show-counpon')}}"
                                    } ,500);
                }
            })
        })
        })
    </script>
    {{-- Xoá người dùng --}}
    <script>
        $(document).ready(function() {
            $('.delete_admin').click(function() {

            var id = $(this).data('id_admin');
            var _token = $('input[name="_token"]').val();
            var url = '{{url('/delete-admin')}}';
        var dltUrl = url+ "/" +id;

            $.ajax({

                url: dltUrl ,
                method: 'POST',
                data: {
                    id:id,
                    _token:_token,
                },
                success: function(data) {
                    $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        toastr.success('Xoá Thành Công.')
                    });
                    window.setTimeout(function(){
                                    window.location.href = "{{url('/show-customer')}}"
                                    } ,500);
                }
            })
        })
        })
    </script>
    {{-- Xoá nhân viên --}}
     <script>
        $(document).ready(function() {
            $('.delete_assis').click(function() {

            var id = $(this).data('id_asiss');
            var _token = $('input[name="_token"]').val();
            var url = '{{url('/delete-admin')}}';
        var dltUrl = url+ "/" +id;

            $.ajax({

                url: dltUrl ,
                method: 'POST',
                data: {
                    id:id,
                    _token:_token,
                },
                success: function(data) {
                    $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        toastr.success('Xoá Thành Công.')
                    });
                    window.setTimeout(function(){
                                    window.location.href = "{{url('/show-customer')}}"
                                    } ,500);
                }
            })
        })
        })
    </script>
    {{-- Xoá khách hàng --}}
    <script>
        $(document).ready(function() {
            $('.delete_customer').click(function() {

            var id = $(this).data('id_customer');
            var _token = $('input[name="_token"]').val();
            var url = '{{url('/delete-customer')}}';
        var dltUrl = url+ "/" +id;

            $.ajax({

                url: dltUrl ,
                method: 'POST',
                data: {
                    id:id,
                    _token:_token,
                },
                success: function(data) {
                    $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        toastr.success('Xoá Thành Công.')
                    });
                    window.setTimeout(function(){
                                    window.location.href = "{{url('/show-customer')}}"
                                    } ,500);
                }
            })
        })
        })
    </script>
    {{-- Xoá hoá đơn --}}

    <script>
        $(document).ready(function(){
            $('.update').click(function(e){
                e.preventDefault();
                var id = $('#id').val();
                var admin_user = $('#admin_user').val();
                var admin_name = $('#admin_name').val();
                var admin_password = $('#admin_password').val();
                var level = $('#level').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({

                url: '{{url('/update-admin')}}',
                method: 'POST',
                data: {
                    admin_user: admin_user,
                    admin_name: admin_name,
                    admin_password: admin_password,
                    level: level,
                    id:id,
                    _token: _token
                },
                success: function(data) {
                    $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        toastr.success('Chỉnh Sửa Thành Công.')
                    });
                    window.setTimeout(function(){
                                    window.location.href = "{{url('/show-customer')}}"
                                    } ,500);
                }
                })

            })
        })
    </script>
    {{-- Cập nhật người dùng --}}
    <script>
        $(document).ready(function(){
            $('.submit').click(function(e){
                e.preventDefault();
                var id = $('#id').val();
                var name = $('#name').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var address = $('textarea').val();
                var phone = $('#phone').val();
                var _token = $('input[name="_token"]').val();

                $.ajax({

                url: '{{url('/update-customer-admin')}}',
                method: 'POST',
                data: {
                    name: name,
                    email: email,
                    password: password,
                    address: address,
                    phone: phone,
                    id:id,
                    _token: _token
                },
                success: function(data) {
                    $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        toastr.success('Chỉnh Sửa Thành Công.')

                    });
                    window.setTimeout(function(){
                                    window.location.href = "{{url('/show-customer')}}"
                                    } ,500);
                }
                })

            })
        })
    </script>
    {{-- thêm khách hàng  --}}
    <script>
        $(document).ready(function() {
        $(".add_customer").click(function(e){
            e.preventDefault();

                var name = $('#name').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var address = $('textarea').val();
                var phone = $('#phone').val();
                var _token = $('input[name="_token"]').val();

            $.ajax({
                url: '{{url('/store-customer')}}',
                type:'POST',
                data: {
                    name: name,
                    email: email,
                    password: password,
                    address: address,
                    phone: phone,

                    _token: _token
                },
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        toastr.success('Thêm Thành Công.')
                    });
                    window.setTimeout(function(){
                                    window.location.href = "{{url('/show-customer')}}"
                                    } ,500);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });

        });

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
    </script>
{{-- <script>
    {{-- Thêm quản trị viên --}}
    <script>
        $(document).ready(function() {
        $(".submit").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var user = $("input[name='admin_user']").val();
            var name = $("input[name='admin_name']").val();
            var password = $("input[name='admin_password']").val();
            var level = $("#level").val();

            $.ajax({
                url: '{{url('/store-admin')}}',
                type:'POST',
                data: {_token:_token, user:user, name:name, password:password, level:level},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        toastr.success('Thêm Thành Công.')
                    });
                    window.setTimeout(function(){
                                    window.location.href = "{{url('/show-customer')}}"
                                    } ,500);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });

        });

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
    </script>
{{-- <script>
    $(document).ready(function(){

        $('.add-blog').click(function(e){
e.preventDefault();
                var blog_tittle = $('#blog_tittle').val();
                var blog_tag = $('#blog_tag').val();
                var blog_image = $('#blog_image').val();
                var desc = CKEDITOR.instances['id4'].getData();
                var blog_status = $('#blog_status').val();
                var blog_highlight = $('#blog_highlight').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({

url: '{{url('/add-blog-ajax')}}',
method: 'POST',
data: {
    blog_tittle: blog_tittle,
    blog_tag: blog_tag,
    blog_image: blog_image,
    desc:desc,
    blog_status:blog_status,
    blog_highlight:blog_highlight,
    _token: _token
},
success: function(data) {
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        toastr.success('Thêm Bài Viết Thành Công')
    });
    window.setTimeout(function(){
                    window.location.href = "{{url('/show-counpon')}}"
                    } ,500);
}
})
        })
    })
</script> --}}
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>

</body>
</html>
