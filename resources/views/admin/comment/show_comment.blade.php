@extends('admin_dashboard')
@section('admin_content')
<div class="content-wrapper mt-4">
    <section class="content">
<div class="row">
<h2>Liệt kê Các Bình Luận</h2>

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
          <h3 class="card-title">Danh sách các bình luận</h3>

          <div class="card-tools">
            {{-- <div class="input-group input-group-sm" style="width: 150px;">

              <input  type="search" name="search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">


              </div>
            </div> --}}
          </div>

        </div>

        <!-- /.card-header -->
        <div class="card-body e p-0" >
          <table class="table  table-bordered table-hover " id = "Table1">
            <thead>
              <tr style="text-align: center;">

                <th>Thứ tự</th>
                <th>Tên Khách Hàng</th>
                <th>Ngày bình luận</th>
                <th>Sản Phẩm</th>
                <th>Đánh giá sao </th>
                <th>Nội dung</th>
                <th>Trạng Thái</th>
                <th>Chức năng</th>
                <th></th>


              </tr>
            </thead>
            <tbody>
                @php
                    $i =0;
                @endphp
                @foreach ($comment as $cmt)
                <tr style="text-align: center">
                    @php
                        $i++;
                    @endphp
                        <td>
                            {{$i}}
                        </td>
                        <td>
                            {{$cmt->comment_name}}
                        </td>
                        <td>
                            {{$cmt->date}}
                        </td>
                        <td >
                            {{$cmt->product->product_name}}
                        </td>
                        <td>
                            {{$cmt->star_rating}}<i style="color:yellow" class="fas fa-star"></i>
                        </td>
                        <td>
                            @if($cmt->comment==null)
                           <p style="color: #007bff" class="">Chưa có bình luận</p>
                           @else
                           <p style="color: #007bff" class=""> {{$cmt->comment}}</p>
                        @endif
                        </td>
                        <td>
                        @if ($cmt->comment_status==1)
                            <a href="{{URL::to('/native-comment/'.$cmt->comment_id)}}" class="btn btn-primary">Duyệt</a>
                        @else
                        <a href="{{URL::to('/unnative-comment/'.$cmt->comment_id)}}" class="btn btn-danger">Đã Duyệt</a>
                        @endif

                        </td>
                        <td > <a target="_blank" href="{{URL::to('/chi-tiet-san-pham/'.$cmt->comment_product_id)}}"  data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Xem Chi Tiết Bình Luận" ><i class="nav-icon far fa-eye"></i></a></td>

                         <td > <a onclick="return confirm('Bạn Có Chắc Là Muốn Xoá Danh Mục Này Không ?')" href="{{URL::to('/delete-comment/'.$cmt->comment_id)}}" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Xoá Bình Luận ""><i style="color: red;" class="nav-icon far fa-trash-alt"></i></a></td>
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
