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
        <div class="card-body table-responsive p-0" style="height: 500px;">
          <table class="table table-head-fixed text-nowrap" id = "Table1">
            <thead>
              <tr style="text-align: center;">

                <th>Thứ tự</th>
                <th>Tiêu đề </th>
                <th>Hình ảnh </th>
                <th>Hiển Thị</th>
                <th>Chức năng</th>

                <th></th>


              </tr>
            </thead>
            <tbody>
                @php
                    $i =0;
                @endphp
                @foreach ($banner as $bn)
                <tr style="text-align: center">
                    @php
                        $i++;
                    @endphp
                        <td>
                            {{$i}}
                        </td>
                        <td>
                            {{$bn->banner_title }}
                        </td>

                        <td >
                            <img src="public/upload/product/{{ $bn->banner_image }}" height="200" width="500">
                        </td>

                        <td>
                        @if ($bn->banner_status==1)
                            <a href="{{URL::to('/native-banner/'.$bn->banner_id)}}" class="btn btn-primary">Hiện</a>
                        @else
                        <a href="{{URL::to('/unnative-banner/'.$bn->banner_id)}}" class="btn btn-danger">Ẩn</a>
                        @endif

                        </td>

                        <td > <a href="{{URL::to('/edit-banner/'.$bn->banner_id)}}"  data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Chỉnh sửa bài viết" ><i class="nav-icon far fa-edit"></i></a></td>
                         <td > <a onclick="return confirm('Bạn Có Chắc Là Muốn Xoá  Mục Này Không ?')" href="{{URL::to('/delete-banner/'.$bn->banner_id )}}" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Xoá Banner ""><i style="color: red;" class="nav-icon far fa-trash-alt"></i></a></td>
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
<a href="{{URL::to('/add-banner')}}" class="btn btn-primary">Thêm banner</a>
  {{-- <a href="{{URL::to('add-category')}}" class="btn btn-outline-primary">Thêm Danh Mục</a> --}}
    </section>
</div>
  @endsection
