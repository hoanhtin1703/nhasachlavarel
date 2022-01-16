
@extends('admin_dashboard')
@section('admin_content')


<div class="content-wrapper mt-4">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Cập Nhật Danh Mục Sản Phẩm</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @foreach ($edit_category as $key => $category)
            <form method="post" action="{{URL::to('/update-category/'.$category->category_id)}}">
                {{(csrf_field())}}

              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên Danh Mục</label>
                  <input type="text" value="{{($category->category_name)}}" name="category_Name"class="form-control" id="exampleInputEmail1" placeholder=" Điền Tên Danh Mục" required>
                </div>
              </div>
              @endforeach
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit"  class="btn btn-outline-primary">Thêm </button>
                <a href="{{URL::to('/show-category')}}" class="btn btn-outline-danger">Huỷ</a>
              </div>
            </form>
          </div>

</div>
@endsection

