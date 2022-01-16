<?php

namespace App\Http\Controllers;
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
session_start();
class CategoryType extends Controller
{
  public function AuthLogin(){
    $admin_id = Session::get('admin_id');
    if($admin_id){
        return Redirect::to('dashboard');
    }else{
        return Redirect::to('admin')->send();
    }
}
    public function showCategory_type(Request $request)
    {
      $this->AuthLogin();


        $all_category_type=DB::table('tbl_category_type')
        ->get();


      $manager_category_type=view('admin.category_type.show_category_type')->with('list_category_type',$all_category_type);
    return view('admin_dashboard')->with('admin.category_type.show_category_type', $manager_category_type);

    }
    public function addCategory_type()
    {
      $category = DB::table('tbl_category')->orderby('category_id','desc')->get();
      $this->AuthLogin();
return view('admin.category_type.add_category_type')->with('cate',$category);
    }
    public function saveCategory_type(Request $request){
      $this->AuthLogin();
     $data = array();
     $data['category_id'] = $request->category;
     $data['category_type_name'] = $request->category_type_Name;
     $data['category_type_status'] = $request->category_type_Status;
    DB::table('tbl_category_type')->insert($data);
    // Session::put('message','Thêm Thành Công');
    return Redirect::to('/show-category_type')->with('message','Thêm Thành Công');

    }
    public function editCategory_type($category_type_ID){
      $this->AuthLogin();
      $category = DB::table('tbl_category')->orderby('category_id','desc')->get();
      $edit_category_type=DB::table('tbl_category_type')->where('category_type_id',$category_type_ID)->get();
      $manager_category_type=view('admin.category_type.edit_category_type')->with('edit_category_type',$edit_category_type)->with('cate_product',$category);

     return view('admin_dashboard')->with('admin.category_type.edit_category_type', $manager_category_type);
    }
    public function updateCategory_type(Request $request, $category_type_ID)
    {
      $this->AuthLogin();
      $data = array();
      $data['category_type_name'] = $request->category_type_Name;
    DB::table('tbl_category_type')->where('category_type_id',$category_type_ID)->update($data);
    return Redirect::to('/show-category_type')->with('message','Cập Nhật Thành Công');
    }
    public function deleteCategory_type($category_type_ID){
      $this->AuthLogin();
      DB::table('tbl_category_type')->where('category_type_id',$category_type_ID)->delete();
      return Redirect::to('/show-category_type')->with('message','Xoá Thành Công');
    }
    public function unactive_Category_type($category_type_ID){
      $this->AuthLogin();
        DB::table('tbl_category_type')->where('category_type_id',$category_type_ID)->update(['category_type_status'=>0]);

        return Redirect::to('/show-category_type')->with('message','Ẩn Thành Công');

    }
    public function active_Category_type($category_type_ID){
      $this->AuthLogin();
        DB::table('tbl_category_type')->where('category_type_id',$category_type_ID)->update(['category_type_status'=>1]);
        return Redirect::to('/show-category_type')->with('message','Kích Hoạt Thành Công');

    }
    public function show_category_type_home($category_type_id){
        $cate_type_product_name = Category_type::where('category_type_id', $category_type_id)->first();
        $cate_product = Category::where('category_status','1')->orderby('category_id','desc')->get();
        $cate_type_product = Category_type::where('category_type_status','1')->orderby('category_type_id','desc')->get();
        $category_type = Product::where('category_type_id',$category_type_id)
                            ->where('product_status',1)
                            ->orderby('product_id','asc')
                            ->paginate(8);
                            $count = count($cate_type_product);
        return view('pages.category.filter_category_type')->with(compact('category_type','cate_product','cate_type_product','cate_type_product_name','count'));
    }
}

