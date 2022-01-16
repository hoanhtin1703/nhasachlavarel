@extends('admin_dashboard')
@section('admin_content')

<div class="content-wrapper mt-4">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm Thương Hiệu</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form method="post" action="{{URL::to('/save-category_type')}}">
                {{(csrf_field())}}

              <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Tên Loại Sản Phẩm</label>
                  <input type="text" name="category_type_Name"class="form-control" id="exampleInputEmail1" placeholder=" Điền Tên Danh Mục" required>
                </div>
                <div class="form-group">
                  <label for=""> Danh Mục</label>
                  <select class="form-control form-select" name="category" id="">

                    @foreach ($cate as $key => $category)
                    <option value="{{($category->category_id)}}"> {{($category->category_name)}}</option>

                    @endforeach

                  </select>
                </div>
                <div class="form-group">
                  <label for=""> Ẩn Hiện</label>
                  <select class="form-control" name="category_type_Status" id="">
                    <option value="0">Ẩn </option>
                    <option value="1">Hiện</option>

                  </select>
                </div>

              </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit"  class="btn btn-outline-primary">Thêm </button>
                <a href="{{URL::to('/show-category_type')}}" class="btn btn-outline-danger">Huỷ</a>
              </div>
            </form>
          </div>

</div>
@endsection
