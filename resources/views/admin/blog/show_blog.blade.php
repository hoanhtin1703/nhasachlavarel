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
        <div class="card-body  p-0" >
          <table class="table table-bordered table-hover" id = "Table1">
            <thead>
              <tr style="text-align: center;">

                <th>Thứ tự</th>
                <th>Tiêu đề bài viết</th>
                <th >Thẻ tiêu đề (tag name)</th>
                <th>Hình ảnh bài viết</th>
                <th>Ngày cập nhật</th>
                <th>Nổi Bật</th>
                <th>Hiển Thị</th>
                <th>Chức năng</th>
                <th></th>
                <th></th>


              </tr>
            </thead>
            <tbody>
                @php
                    $i =0;
                @endphp
                @foreach ($blog as $bl)
                <tr style="text-align: center">
                    @php
                        $i++;
                    @endphp
                        <td>
                            {{$i}}
                        </td>
                        <td >
                            {{$bl->blog_title }}
                        </td>
                        <td >
                            {{$bl->blog_tag}}
                        </td>
                        <td >
                            <img src="public/upload/product/{{ $bl->blog_thumnail }}" height="100" width="100">
                        </td>
                        <td>
                            {{$bl->date_public}}
                        </td>
                        <td>
                            @if ($bl->blog_highlight==1)
                                <a href="{{URL::to('/native-highlight/'.$bl->blog_id)}}" class="btn btn-primary"> Tắt </a>
                            @else
                            <a href="{{URL::to('/unnative-highlight/'.$bl->blog_id)}}" class="btn btn-danger">  Nổi Bật</a>
                            @endif

                            </td>
                        <td>
                        @if ($bl->blog_status==1)
                            <a href="{{URL::to('/native-blog/'.$bl->blog_id)}}" class="btn btn-primary">Hiện</a>
                        @else
                        <a href="{{URL::to('/unnative-blog/'.$bl->blog_id)}}" class="btn btn-danger">Ẩn</a>
                        @endif

                        </td>
                        <td > <a target="_blank" href="{{URL::to('/chi-tiet-san-pham/'.$bl->blog_id )}}"  data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Xem Chi Tiết Bình Luận" ><i class="nav-icon far fa-eye"></i></a></td>
                        <td > <a target="_blank" href="{{URL::to('/edit-blog/'.$bl->blog_id )}}"  data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Chỉnh sửa bài viết" ><i class="nav-icon far fa-edit"></i></a></td>
                         <td > <a onclick="return confirm('Bạn Có Chắc Là Muốn Xoá Danh Mục Này Không ?')" href="{{URL::to('/delete-blog/'.$bl->blog_id )}}" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Xoá Bình Luận ""><i style="color: red;" class="nav-icon far fa-trash-alt"></i></a></td>
                </tr>
                @endforeach


            </tbody>
          </table>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <a href="{{URL::to('/add-blog')}}" class="btn btn-primary">Thêm bài viết</a>

          </div>
      </div>
      <!-- /.card -->
      {{-- <div >{{ $list_category ->links() }} </div> --}}

    </div>
</div>

  {{-- <a href="{{URL::to('add-category')}}" class="btn btn-outline-primary">Thêm Danh Mục</a> --}}
    </section>
</div>
  @endsection
