@extends('admin_dashboard')
@section('admin_content')
<div class="content-wrapper mt-4">
    <section class="content">
{{--  --}}
<div class="row">
    @if (session('message'))
     <div class="alert alert-success">
     <span class="badge badge-pill badge-success">{{(session('message'))}} </span>
     </div>
     @endif
    <div class="col-12">
      <div class="card">
        <form action="{{URL::to('/search-category')}}" method="get">
        <div class="card-header">
          <h3 class="card-title">Danh sách các danh mục</h3>



        </div>
    </form>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table  table-bordered table-hover table-head-fixed text-nowrap" id="Table1">
            <thead>
              <tr>
                  <th>STT</th>
                <th>Tên Danh Mục</th>
                <th>Hiển Thị</th>
                <th >Chức năng</th>
<th></th>
              </tr>
            </thead>
            <tbody>
                @php
                $i=0;
            @endphp
                @foreach ($list_category as $key => $category)
                <tr>
                    @php
                $i++;
            @endphp
            <td>{{$i}}</td>
                  <td >{{($category->category_name)}}</td>
                  <td ><span class="text-ellipsis">
                      <?php
                      if($category->category_status==1){
                        ?>
                        <a href="{{URL::to('/unactive-category/'.$category->category_id)}}" class="btn btn-success"> Hiện</a>
                        <?php
                         }else{
                        ?>
                         <a href="{{URL::to('/active-category/'.$category->category_id)}}"class="btn btn-danger">Ẩn</a>
                        <?php
                       }
                      ?>
                    </span>
                  </td>
                   <td > <a href="{{URL::to('/edit_category/'.$category->category_id)}}"  data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Chỉnh sửa loại sản phẩm" ><i  class="nav-icon far fa-edit"></i></a></td>
                    <td > <a onclick="return confirm('Bạn Có Chắc Là Muốn Xoá Danh Mục Này Không ?')" href="{{URL::to('/delete_category_type/'.$category->category_id)}}" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Xoá loại sản phẩm ""><i style="color: red;" class="nav-icon far fa-trash-alt"></i></a></td>

                </tr>
                @endforeach

            </tbody>
          </table>

        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

    </div>
</div>
  <a href="{{URL::to('add-category')}}" class="btn btn-outline-primary">Thêm Danh Mục</a>
    </section>
</div>
  @endsection
