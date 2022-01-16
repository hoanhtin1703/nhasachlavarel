<?php

namespace App\Http\Controllers;
use App\Models\Admin_Product;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\City;
use App\Models\Feeship;
use App\Models\Province;
use App\Models\Wards;
use App\Models\Customer;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\Product;
use App\Models\Order_details;
use App\Models\Category;
use App\Models\Category_type;
use App\Models\Comment;
use App\Models\Blog;
session_start();


class BlogController extends Controller
{
    public function add_blog(){
        return view('admin.blog.add_blog');
    }
    public function show_blog(){
        $blog = Blog::all();
        return view('admin.blog.show_blog')->with(compact('blog'));
    }
    public function add_blog_ajax( Request $request){
        $data = $request->all();
$blog = new Blog();
$blog->blog_title = $request->blog_tittle;
$blog->blog_tag = $request->blog_tag;
$blog->blog_desc = $request->Desc;
date_default_timezone_set('Asia/Ho_Chi_Minh');
$blog->date_public = now();
$blog->blog_highlight = $request->blog_hightlight;
$blog->blog_status = $request->blog_status;
$blog->blog_thumnail = $request->product_Image;
// $get_image = $request->product_Image;
$get_image = $request->file('product_Image');

// dd($get_image);
if($get_image){

    $get_name_image = $get_image->getClientOriginalName();
    $name_image = current(explode('.',$get_name_image));

    $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();


    $get_image->move('public/upload/product',$new_image);

    $blog->blog_thumnail = $new_image;
    $blog->save();
    return Redirect::to('show-blog')->with('message','Thêm Bài Viết Thành Công');
}
$blog->blog_thumnail = "";
$blog->save();
return Redirect::to('show-blog')->with('message','Thêm Bài Viết Thành Công');
    }
    public function edit_blog($blog_id){
          $edit_blog = Blog::where('blog_id',$blog_id)->first();
          return view('admin.blog.edit_blog')->with(compact('edit_blog'));

      }
      public function update_blog(Request $request){

        $blog = Blog::find($request->blog_id);

        $blog->blog_title = $request->blog_tittle;
        $blog->blog_tag = $request->blog_tag;
        $blog->blog_desc = $request->Desc;
        $get_image = $request->file('product_Image');
        if($get_image){

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));

            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();


            $get_image->move('public/upload/product',$new_image);

            $blog->blog_thumnail = $new_image;
            $blog->save();

            return Redirect::to('show-blog')->with('message','Cập Nhật Bài Viết Thành Công Thành Công');
        }
        $blog->save();
        return Redirect::to('show-blog')->with('message','Cập Nhật Bài Viết Thành Công Thành Công');

}public function delete_blog($blog_id) {
    $blog = Blog::find($blog_id);
    $blog->delete();
    return Redirect::to('show-blog')->with('message','Xoá Bài Viết Thành Công');
}
public function unnative_blog($id){
      $blog = Blog::find($id);
    if ($blog) {
    $blog->blog_status=1;
    $blog->save();
    }
    return Redirect::to('show-blog')->with('message','Hiện Bài Viết Thành Công');
}
public function native_blog($id){
$blog = Blog::find($id);

    if ($blog) {
    $blog->blog_status=0;
    $blog->save();

}
return Redirect::to('show-log')->with('message','Ẩn Bài Viết Thành Công');
}
public function unnative_highlight($id){
$blog = Blog::find($id);
    if ($blog) {
    $blog->blog_highlight=1;
    $blog->save();

    }
    return Redirect::to('show-log')->with('message',' Đã Tắt Bài Viết Nổi Bật Thành Công');
}
public function native_highlight($id){
$blog = Blog::find($id);

    if ($blog) {
    $blog->blog_highlight=0;
    $blog->save();

}
return Redirect::to('show-blog')->with('message','Đã Bật Bài Viết Nổi Bật Thành Công');
}
}

