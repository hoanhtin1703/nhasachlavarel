@extends('admin_dashboard')
@section('admin_content')
<div class="content-wrapper mt-4">
    <section class="content">
<div class="card">
    <div class="card-header">
      <button disabled="disabled" class="btn btn-primary">Danh sách các thương hiệu</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">


     @if (session('message'))
     <div class="alert alert-success ">
     <span class="badge badge-pill badge-success">{{(session('message'))}} </span>
     </div>
     @endif

     <form action="{{URL::to('/search-category-type')}}" method="get">

      <section class="content">

    </section>
     </form>
  <br>
      <table  class="table table-bordered table-hover" id="Table1">
        <thead>
        <tr>
          <th style="text-align:center">STT</th>
          <th style="text-align:center">Tên Loại Sản Phẩm</th>
          <th style="text-align:center">Trạng Thái</th>
          <th  style="text-align:center">Chức Năng</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
            @php
                $i=0;
            @endphp
          @foreach ($list_category_type as $key => $category_type)
          @php
              $i++;
          @endphp
          <tr>
              <td style="text-align:center">{{$i}}</td>
            <td style="text-align: center">{{($category_type->category_type_name)}}</td>
            <td style="text-align:center"><span class="text-ellipsis">
                <?php
                 if($category_type->category_type_status==1){
                  ?>
                  <a href="{{URL::to('/unactive-category_type/'.$category_type->category_type_id)}}" class="btn btn-success"> Hiện</a>
                  <?php
                   }else{
                  ?>
                   <a href="{{URL::to('/active-category_type/'.$category_type->category_type_id)}}"class="btn btn-danger">Ẩn</a>
                  <?php
                 }
                ?>
              </span>
            </td>
             <td style="text-align: center"> <a href="{{URL::to('/edit_category_type/'.$category_type->category_type_id)}}"  data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Chỉnh sửa loại sản phẩm" ><i  class="nav-icon far fa-edit"></i></a></td>
              <td style="text-align: center"> <a onclick="return confirm('Bạn Có Chắc Là Muốn Xoá Danh Mục Này Không ?')" href="{{URL::to('/delete_category_type/'.$category_type->category_type_id)}}" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Xoá loại sản phẩm ""><i style="color: red;" class="nav-icon far fa-trash-alt"></i></a></td>

          </tr>
          @endforeach


        </tbody>

      </table>
      <br>

    </div>
    <!-- /.card-body -->
  </div>
  <a href="{{URL::to('add-category_type')}}" class="btn btn-outline-primary">Thêm Loại Sản Phẩm </a>
    </section>
</div>

  @endsection
