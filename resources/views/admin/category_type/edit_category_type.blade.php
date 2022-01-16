
@extends('admin_dashboard')
@section('admin_content')


<div class="content-wrapper mt-4">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Cập Nhật Thương Hiệu</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @foreach ($edit_category_type as $key => $edit_type)
            <form method="post" action="{{URL::to('/update-category_type/'.$edit_type->category_type_id)}}">
                {{(csrf_field())}}

              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên Loại Sản Phẩm</label>
                  <input type="text" value="{{($edit_type->category_type_name)}}" name="category_type_Name"class="form-control" id="exampleInputEmail1" placeholder=" Điền Tên Danh Mục" required>
                </div>
                <div class="form-group">
                  <label for=""> Danh Mục</label>
                  <select class="form-control form-select" name="category" id="">


                      @foreach ($cate_product as $key => $cate)
                      @if ($cate->category_id == $edit_type->category_id)
                      <option selected value="{{($cate->category_id)}}">{{($cate->category_name)}}</option>
                      @else
                        <option value="{{($cate->category_id)}}"> {{($cate->category_name)}}</option>
                      @endif

                      @endforeach

                  </select>
                </div>
              </div>
              @endforeach
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit"  class="btn btn-outline-primary">Thêm </button>
                <a href="{{URL::to('/show-category_type')}}" class="btn btn-outline-danger">Huỷ</a>
              </div>
            </form>
          </div>

</div>
@endsection

