@extends('admin_dashboard')
@section('admin_content')

<div class="content-wrapper mt-4">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm Danh Mục Sản Phẩm</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form method="post" action="{{URL::to('/save-category')}}">
                {{(csrf_field())}}

              <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Tên Danh Mục</label>
                  <input type="text" name="category_Name"class="form-control" id="exampleInputEmail1" placeholder=" Điền Tên Danh Mục" required>
                </div>
                <div class="form-group">
                  <label for=""> Ẩn Hiện</label>
                  <select class="form-control" name="category_Status" id="">
                    <option value="0">Ẩn </option>
                    <option value="1">Hiện</option>

                  </select>
                </div>
              </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit"  class="btn btn-outline-primary">Thêm </button>
                <a href="{{URL::to('/show-category')}}" class="btn btn-outline-danger">Huỷ</a>
              </div>
            </form>
          </div>

</div>
@endsection
