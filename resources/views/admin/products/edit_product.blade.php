@extends('admin_dashboard')
@section('admin_content')

<div class="content-wrapper mt-4">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm Sản Phẩm</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @foreach ($edit_product as $key => $pro)
            <form method="post" action="{{URL::to('/update-product/'.$pro->product_id)}}" enctype="multipart/form-data"">
                {{(csrf_field())}}

              <div class="card-body">
                <div class="form-group">
                    <label for=""> Danh Mục</label>
                    <select class="form-control form-select" name="category" id="">


                        @foreach ($cate_product as $key => $cate)
                        @if ($cate->category_id == $pro->category_id)
                        <option selected value="{{($cate->category_id)}}">{{($cate->category_name)}}</option>
                        @else
                          <option value="{{($cate->category_id)}}"> {{($cate->category_name)}}</option>
                        @endif

                        @endforeach

                    </select>
                  </div>
                  <div class="form-group">
                    <label for=""> Loại Sản Phẩm</label>
                    <select class="form-control form-select" name="category_type" id="">
                      @foreach ($cate_type_product as $key => $cate_type)
                      @if ($cate_type->category_type_id == $pro->category_type_id)
                      <option selected value="{{($cate_type->category_type_id)}}"> {{($cate_type->category_type_name)}}</option>
                      @else
                        <option value="{{($cate_type->category_type_id)}}"> {{($cate_type->category_type_name)}}</option>
                      @endif

                      @endforeach
                    </select>
                  </div>




                <div class="form-group">
                  <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                  <input type="text" name="product_Name"class="form-control" id="exampleInputEmail1" value="{{($pro->product_name)}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Số Lượng</label>
                    <input type="number" name="product_Quantity"class="form-control" id="exampleInputEmail1" value="{{($pro->product_quantity)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Giá Sản Phẩm</label>
                    <input type="text" name="product_Price"class="form-control" id="exampleInputEmail1" value="{{($pro->product_price)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Nhà Xuất Bản</label>
                    <input type="text" name="public_Author"class="form-control" id="exampleInputEmail1" value="{{($pro->public_author)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tác Giả</label>
                    <input type="text" name="product_Author"class="form-control" id="exampleInputEmail1" value="{{($pro->product_author)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Chất Liệu</label>
                    <input type="text" name="product_Material"class="form-control" id="exampleInputEmail1" value="{{($pro->product_material)}}"required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kích Thước</label>
                    <input type="text" name="product_Size"class="form-control" id="exampleInputEmail1"value="{{($pro->product_size)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Số Trang</label>
                    <input type="text" name="product_Pages"class="form-control" id="exampleInputEmail1" value="{{($pro->product_pages)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ngày Xuất Bản</label>
                    <input type="date" name="pubic_Date"class="form-control" id="exampleInputEmail1" value="{{($pro->public_date)}}" required>
                  </div>
                  <div class="form-group">
                    <label for="">Hình Ảnh 1</label>
                    <input type="file" class="form-control-file form-control" name="product_Image" id="" aria-describedby="fileHelpId">
                    <img class="mt-2" src="{{URL::to('public/upload/product/'.$pro->product_image)}}" alt="">
                  </div>
                  <div class="form-group">
                    <label for="">Hình Ảnh 2</label>
                    <input type="file" class="form-control-file form-control" name="product_Image1" id="" aria-describedby="fileHelpId">
                    <img class="mt-2" src="{{URL::to('public/upload/product/'.$pro->product_image1)}}" alt="">
                  </div>
                  <div class="form-group">
                    <label for="">Hình Ảnh 3</label>
                    <input type="file" class="form-control-file form-control" name="product_Image2" id="" aria-describedby="fileHelpId">
                    <img class="mt-2" src="{{URL::to('public/upload/product/'.$pro->product_image2)}}" alt="">
                  </div>
               <div class="form-group">
                 <label for="">Mô tả sản phẩm</label>
                 <textarea name="product_Desc" id="tomtat" class="form-control-file"  cols="30" rows="10">{{($pro->product_desc)}}</textarea>
               </div>

              </div>
              @endforeach
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit"  class="btn btn-outline-primary">Thêm </button>
                <a href="{{URL::to('/show-product')}}" class="btn btn-outline-danger">Huỷ</a>
              </div>
            </form>
          </div>

</div>
@endsection
