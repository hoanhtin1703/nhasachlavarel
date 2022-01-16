@extends('admin_dashboard')
@section('admin_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row mt-5">
            <div class="card">
                <div class="card-title" style="display: flex">
                    <img src="{{asset('public/newfrontend/assets/images/demos/demo-20/BB8E3572-A716-422E-972F-5DA6F045D6A9-removebg-preview.png')}}" alt="Molla Logo" width="150" height="50">

                </div>

                <div class="card-body">

<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info" style="background-color: #344CB7 !important ">
              <div class="inner">
                <h3>{{$new_Order}}</h3>

                <p>Đơn Hàng Mới</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>

              </div>
              <a href="{{URL::to('/show-new-order')}}" class="small-box-footer">Xem Chi Tiết <i class="fas fa-arrow-circle-right"></i></a>
            </div>


          </div>
          <!-- ./col -->
          @if (Session::get('admin_id'))
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{number_format($total->total,0,'.','.')}}<sup style="font-size: 20px">vnđ</sup></h3>

                <p>Tổng Doanh Thu</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>

              <a href="#" class="small-box-footer">Xem Chi Tiêt<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          @endif

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary" style="background-color: #DD4A48 !important">
              <div class="inner">
                <h3>{{$customer}}</h3>

                <p>Khách Hàng </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              @if (Session::get('admin_id'))
              <a href="{{URL::to('/show-customer')}}" class="small-box-footer">Xem Chi Tiết<i class="fas fa-arrow-circle-right"></i></a>
              @endif

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark" style="background-color: #E63E6D !important">
              <div class="inner">
                <h3>{{$assistant}}</h3>

                <p>Nhân Viên</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              @if (Session::get('admin_id'))
              <a href="{{URL::to('/show-customer')}}" class="small-box-footer">Xem Chi Tiết<i class="fas fa-arrow-circle-right"></i></a>
              @endif
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning" >
              <div class="inner">
                <h3>{{$product}}</h3>

                <p>Sản Phẩm</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{URL::to('/show-product')}}" class="small-box-footer">Xem Chi Tiết<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary" style="background-color: #B85252 !important">
              <div class="inner">
                <h3>{{ $product_sold}}</h3>

                <p>Sản Phẩm Đã Bán </p>
              </div>
              <div class="icon">
                <i class="ion ion-android-playstore"></i>
              </div>
              <a href="{{URL::to('/show-sold-product')}}" class="small-box-footer">Xem chi tiêt <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark" style="background-color: #AE4CCF !important">
              <div class="inner">
                <h3>{{ $comment}}</h3>

                <p>Bình luận Chưa Duyệt</p>
              </div>
              <div class="icon">
                <i class="ion ion-document-text"></i>
              </div>
              <a href="{{URL::to('/show-comment')}}" class="small-box-footer">Xem Chi Tiết<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
          <!-- ./col -->
        </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
