@extends('admin_dashboard')
@section('admin_content')
<div class="content-wrapper mt-4">
    <section class="content">
<div class="row">
<h2>Liệt kê đơn hàng</h2>

</div>
<div class="row">
    @if (session('message'))
     <div class="alert alert-success">
     <span class="badge badge-pill badge-success">{{(session('message'))}} </span>
     </div>
     @endif
    <div class="col-12">
      <div class="card">

        <div class="card-header">
          <h3 class="card-title">Danh sách các đơn hàng</h3>

          <div class="card-tools">
            {{-- <div class="input-group input-group-sm" style="width: 150px;">

              <input  type="search" name="search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">


              </div>
            </div> --}}
          </div>

        </div>

        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 500px;">
          <table class="table  table-bordered table-hover  table-head-fixed text-nowrap" id = "Table1">
            <thead>
              <tr>

                <th>Thứ tự</th>
                <th>Tên Khách Hàng</th>
                <th>Mã đơn hàng</th>
                <th>Ngày tháng đặt hàng</th>
                <th>Tình trạng đơn hàng</th>
                {{-- <th>Hiển Thị</th> --}}
                <th >Chức năng</th>



              </tr>
            </thead>
            <tbody>
                @php
                $i = 0;
                @endphp
                @foreach ($order as $key => $ord)
                @php
                $i++;
                @endphp
                <tr>
                <td >{{$i}}</td>
                <td >{{$ord->customer->shipping_name }}</td>
                  <td >{{$ord->order_code }}</td>
                  <td >{{$ord->created_at }}</td>

                  <td style="text-align: center">
                @if($ord->order_status==1)
                 <span class="badge bg-success">Đơn Hàng Mới</span>
                @else
                <span class="badge bg-danger">Đã Xử Lý</span>
                @endif</td>


                   <td  style="text-align: center"> <a href="{{URL::to('/view-order/'.$ord->order_code)}}"  data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Xem Hoá Đơn" ><i style="color: green" class="far fa-clipboard"></i></a></td>


                </tr>
                @endforeach

            </tbody>
          </table>

        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->
      {{-- <div >{{ $list_category ->links() }} </div> --}}
    </div>
</div>
  {{-- <a href="{{URL::to('add-category')}}" class="btn btn-outline-primary">Thêm Danh Mục</a> --}}
    </section>
</div>
  @endsection
