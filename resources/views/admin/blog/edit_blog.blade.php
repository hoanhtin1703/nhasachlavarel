@extends('admin_dashboard')
@section('admin_content')

<div class="content-wrapper mt-4">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm Bài Viết</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{URL::to('/update-blog')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
<input type="hidden" name="blog_id" value="{{$edit_blog->blog_id}}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                  <input type="text" name="blog_tittle"class="form-control" value="{{$edit_blog->blog_title}}" id="blog_tittle" placeholder=" Điền Tiêu đề bài viết" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Thẻ tiêu đề (tag name)</label>
                    <input type="text" name="blog_tag"class="form-control" value="{{$edit_blog->blog_tag}}" id="blog_tag" placeholder=" Điền Thẻ tiêu đề" required>
                  </div>
                  <div class="form-group">
                    <label for="">Hình Ảnh Bài Viết</label>
                    <input type="file" class="form-control-file form-control" name="product_Image" id="" aria-describedby="fileHelpId">
                    <img class="mt-2" src="{{URL::to('public/upload/product/'.$edit_blog->blog_thumnail)}}" alt="">
                  </div>
                  <div class="form-group">
                    <label for="">Nội dung bài viết</label>
                    <textarea name="Desc" id="id4" class="form-control-file desc" cols="30" rows="10"> {{$edit_blog->blog_desc}}</textarea>
                  </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit"   class="btn btn-outline-primary">Cập nhật</button>
                <a href="{{URL::to('/show-blog')}}" class="btn btn-outline-danger">Huỷ</a>
              </div>
            </form>
          </div>

</div>
@endsection
