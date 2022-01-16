@extends('admin_dashboard')
@section('admin_content')

<div class="content-wrapper mt-4">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm Banner</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form method="post" action="{{URL::to('/save-banner')}}" enctype="multipart/form-data">
                {{(csrf_field())}}

              <div class="card-body">


                <div class="form-group">
                  <label for="exampleInputEmail1">Tên Banner</label>
                  <input type="text" name="banner_title"class="form-control" id="exampleInputEmail1" placeholder=" Điền Tên Sản Phẩm" required>
                </div>


                  <div class="form-group">
                    <label for="">Hình Ảnh </label>
                    <input type="file" class="form-control-file form-control" name="product_Image" id="" aria-describedby="fileHelpId">
                  </div>


                <div class="form-group">
                  <label for=""> Ẩn Hiện</label>
                  <select class="form-control" name="banner_Status" id="">
                    <option value="0">Ẩn </option>
                    <option value="1">Hiện</option>
                  </select>
                </div>
              </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit"  class="btn btn-outline-primary">Thêm </button>
                <a href="{{URL::to('/show-banner')}}" class="btn btn-outline-danger">Huỷ</a>
              </div>
            </form>
          </div>

</div>
@endsection
