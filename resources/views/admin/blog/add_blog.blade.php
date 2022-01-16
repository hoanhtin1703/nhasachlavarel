@extends('admin_dashboard')
@section('admin_content')

<div class="content-wrapper mt-4">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm Bài Viết</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form action="{{URL::to('/add-blog-ajax')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                  <input type="text" name="blog_tittle"class="form-control" id="blog_tittle" placeholder=" Điền Tiêu đề bài viết" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Thẻ tiêu đề (tag name)</label>
                    <input type="text" name="blog_tag"class="form-control" id="blog_tag" placeholder=" Điền Thẻ tiêu đề" required>
                  </div>
                  <div class="form-group">
                    <label for="">Hình ảnh bài Viết</label>
                    <input type="file" class="form-control-file form-control" name="product_Image" id="" aria-describedby="fileHelpId">
                  </div>
                  <div class="form-group">
                    <label for="">Nội dung bài viết</label>
                    <textarea name="Desc" id="id4" class="form-control-file desc" cols="30" rows="10"></textarea>
                  </div>


                  <div class="form-group">
                    <label for="">Trạng thái hiển thị</label>
                    <select class="form-control" name="blog_status" id="blog_status">
                      <option value="0">Ẩn </option>
                      <option value="1">Hiện</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Bài viết nổi bật</label>
                    <select class="form-control" name="blog_hightlight" id="blog_highlight">
                      <option value="0">Nổi Bật </option>
                      <option value="1">Không Nổi Bật</option>
                    </select>
                  </div>


              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-outline-primary">Thêm </button>
                <a href="{{URL::to('/show-blog')}}" class="btn btn-outline-danger">Huỷ</a>
              </div>
            </form>
          </div>

</div>
@endsection
