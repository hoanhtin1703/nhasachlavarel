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
use App\Models\Banner;
session_start();

class BannerController extends Controller
{
    public function show_banner(Request $request)

    {
        $banner = Banner::all();
        return view('admin.banner.show_banner')->with(compact('banner'));
    }

    public function add_banner()
{

        return view('admin.banner.add_banner');

}
    public function save_banner(Request $request){

$banner = new Banner();
$banner->banner_title = $request->banner_title;//ID Danh Mục
$banner->banner_status=$request->banner_Status;
$banner->banner_image = $request->product_Image;// Hình Ảnh1

     $get_image = $request->file('product_Image');

     if($get_image ){
        $get_name_image = $get_image->getClientOriginalName();

        $name_image = current(explode('.',$get_name_image));

        $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

        $get_image->move('public/upload/product',$new_image);

        $banner->banner_image = $new_image;


        $banner->save();
        return Redirect::to('show-banner')->with('message','Thêm Sản Phẩm Thành Công');

    }
    $banner->banner_image ="";
    $banner->save();
    return Redirect::to('show-banner')->with('message','Thêm Sản Phẩm Thành Công');
    }
    public function edit_banner($id){

      $banner = Banner::find($id);

        return view('admin.banner.edit_banner')->with(compact('banner'));

    }
    public function update_banner(Request $request){

        $banner = Banner::find($request->banner_id);
        $banner->banner_title = $request->banner_title;//ID Danh Mục

        $get_image = $request->file('product_Image');
        if($get_image){

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));

            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();


            $get_image->move('public/upload/product',$new_image);

            $banner->banner_image = $new_image;
            $banner->save();

            return Redirect::to('show-banner')->with('message','Cập Nhật Banner Thành Công Thành Công');
        }
        $banner->save();
        return Redirect::to('show-banner')->with('message','Cập Nhật Banner Thành Công Thành Công');

}
    public function delete_banner($id){
        $banner = Banner::find($id);
        $banner->delete();
      return Redirect::to('show-banner')->with('message','Xoá Thành Công');
    }
    public function unnative_banner($id){
        $banner = Banner::find($id);
      if ($banner) {
      $banner->banner_status=1;
      $banner->save();
      }
      return Redirect::to('show-banner')->with('message','Hiện Banner Thành Công');
  }
  public function native_banner($id){
  $banner = Banner::find($id);

      if ($banner) {
      $banner->banner_status=0;
      $banner->save();

  }
  return Redirect::to('show-banner')->with('message','Ẩn Banner Thành Công');
  }
}
