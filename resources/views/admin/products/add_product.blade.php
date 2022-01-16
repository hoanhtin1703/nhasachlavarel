@extends('admin_dashboard')
@section('admin_content')

<div class="content-wrapper mt-4">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm Sản Phẩm</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form method="post" action="{{URL::to('/save-product')}}" enctype="multipart/form-data">
                {{(csrf_field())}}

              <div class="card-body">
                <div class="form-group">
                    <label for=""> Danh Mục</label>
                    <select class="form-control form-select" name="category" id="">

                      @foreach ($cate as $key => $category)
                      <option value="{{($category->category_id)}}"> {{($category->category_name)}}</option>

                      @endforeach

                    </select>
                  </div>
                  <div class="form-group">
                    <label for=""> Loại Sản Phẩm</label>
                    <select class="form-control form-select" name="category_type" id="">
                      @foreach ($cate_type as $key => $category_type) {}
                      <option value="{{($category_type->category_type_id)}}"> {{($category_type->category_type_name)}}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                  <input type="text" name="product_Name"class="form-control" id="exampleInputEmail1" placeholder=" Điền Tên Sản Phẩm" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Số Lượng</label>
                    <input type="number" name="product_Quantity"class="form-control" id="exampleInputEmail1" placeholder=" Điền Số Lượng" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Giá Sản Phẩm</label>
                    <input type="text" name="product_Price"class="form-control" id="exampleInputEmail1" placeholder=" Điền Giá Sản Phẩm" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Nhà Xuất Bản</label>
                    <input type="text" name="public_Author"class="form-control" id="exampleInputEmail1" placeholder=" Điền Nhà Xuất Bản" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tác Giả</label>
                    <input type="text" name="product_Author"class="form-control" id="exampleInputEmail1" placeholder=" ĐiềnTác Giả" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Chất Liệu</label>
                    <input type="text" name="product_Material"class="form-control" id="exampleInputEmail1" placeholder=" Điền Chất Liệu" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kích Thước</label>
                    <input type="text" name="product_Size"class="form-control" id="exampleInputEmail1" placeholder=" Điền Kích Thước" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Số Trang</label>
                    <input type="text" name="product_Pages"class="form-control" id="exampleInputEmail1" placeholder=" Điền Số Trang" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ngày Xuất Bản</label>
                    <input type="date" name="pubic_Date"class="form-control" id="exampleInputEmail1" required>
                  </div>
                  <div class="form-group">
                    <label for="">Hình Ảnh 1 (Hãy Chọn File ảnh với kích thước <span
                        style="color:red">880x1130</span> để ảnh có lượng tốt nhất)</label>
                    <input type="file" class="form-control-file form-control" name="product_Image" id="" aria-describedby="fileHelpId">
                  </div>
                  <div class="form-group">
                    <label for="">Hình Ảnh 2 (Hãy Chọn File ảnh với kích thước <span
                        style="color:red">880x1130</span> để ảnh có lượng tốt nhất)</label>
                    <input type="file" class="form-control-file form-control" name="product_Image1" id="" aria-describedby="fileHelpId">
                  </div>
                  <div class="form-group">
                    <label for="">Hình Ảnh 3 (Hãy Chọn File ảnh với kích thước <span
                        style="color:red">880x1130</span> để ảnh có lượng tốt nhất)</label>
                    <input type="file" class="form-control-file form-control" name="product_Image2" id="" aria-describedby="fileHelpId">
                  </div>
               <div class="form-group">
                 <label for="">Mô tả sản phẩm</label>
                 <textarea name="product_Desc" id="id4" class="form-control-file" cols="30" rows="10"></textarea>
               </div>
                <div class="form-group">
                  <label for=""> Ẩn Hiện</label>
                  <select class="form-control" name="product_Status" id="">
                    <option value="0">Ẩn </option>
                    <option value="1">Hiện</option>
                  </select>
                </div>
              </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit"  class="btn btn-outline-primary">Thêm </button>
               <a href="{{URL::to('/show-product')}}" class="btn btn-outline-danger">Huỷ</a>
              </div>
            </form>
          </div>

</div>
@endsection
