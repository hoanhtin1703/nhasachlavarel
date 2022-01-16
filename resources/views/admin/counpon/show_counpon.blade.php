@extends('admin.dashboard')
@section('admin_content')
<div class="content-wrapper mt-4">
    <section class="content">
<div class="row">
<h2>Liệt kê mã giảm giá</h2>

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
          <h3 class="card-title">Danh sách các mã giảm giá</h3>

          <div class="card-tools">
          </div>

        </div>

        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table table-head-fixed text-nowrap table-bordered table-hover " id="Table1" >
            <thead style="text-align: center;">
              <tr>

                <th>Thứ tự</th>
                <th>Tên Mã Giảm Giá</th>
                <th>Mã Giảm Giá</th>
                <th>Số tiền giảm giá</th>
                <th>Trạng Thái</th>

                {{-- <th>Hiển Thị</th> --}}
                <th >Chức năng</th>
                <th></th>
              </tr>
            </thead>
            <tbody style="text-align: center;">
                @php
                $i = 0;
                @endphp
                @foreach ($coupon as $key => $cou)
                @php
                $i++;
                @endphp
                <tr>
                <td >{{$i}}</td>
                <td >{{$cou->counpon_name}}</td>
                <td >{{$cou->counpon_code }}</td>

                <td> {{$cou->price_discount}}</td>
                  <td style="text-align: center">@if($cou->counpon_status==0)
                    <span class="badge bg-success">Đang Kích Hoạt</span>
                @else
                <span class="badge bg-danger">Đang Tắt </span>
                @endif

<form >
    @csrf

                   <td > <a href="{{URL::to('/edit-counpon/'.$cou->counpon_id)}}"  data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Xem Hoá Đơn" ><i  class="nav-icon far fa-edit"></i></a></td>
                    <td > <a onclick="return confirm('Bạn Có Chắc Là Muốn Xoá Danh Mục Này Không ?')" class="delete_coupon" data-id_counpon="{{$cou->counpon_id}}"  data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Xoá Hoá Đơn ""><i style="color: red;" class="nav-icon far fa-trash-alt"></i></a></td>
                </form>
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
<a href="{{URL::to('/show-add-counpon')}}" class="btn btn-primary">Thêm Mã Giảm Giá</a>
{{-- <a href="{{URL::to('add-category')}}" class="btn btn-outline-primary">Thêm Danh Mục</a> --}}
    </section>
</div>
@endsection
