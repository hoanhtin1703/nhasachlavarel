<?php

namespace App\Http\Controllers;
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
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

session_start();
class CategoryProductController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
    public function showCategory(Request $request)
    {
        $this->AuthLogin();


            $all_category = DB::table('tbl_category')->get();
        $manager_category = view('admin.category.showcategory')->with('list_category', $all_category);
        return view('admin_dashboard')->with('admin.category.showcategory', $manager_category);
    }
    public function addcatogory()
    {
        $this->AuthLogin();
        return view('admin.category.addcatogory');
    }
    public function saveCategory(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['category_status'] = $request->category_Status;
        $data['category_name'] = $request->category_Name;
        DB::table('tbl_category')->insert($data);
        // Session::put('message','Thêm Thành Công');
        return Redirect::to('/show-category')->with('message', 'Thêm Thành Công');
    }
    public function editCategory($category_ID)
    {
        $this->AuthLogin();
        $edit_category = DB::table('tbl_category')->where('category_id', $category_ID)->get();
        $manager_category = view('admin.editcategory')->with('edit_category', $edit_category);
        return view('admin_dashboard')->with('admin.category.editcategory', $manager_category);
    }
    public function updateCategory(Request $request, $category_ID)
    {
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_Name;
        DB::table('tbl_category')->where('category_id', $category_ID)->update($data);


        return Redirect::to('/show-category')->with('message', 'Cập Nhật Thành Công');
    }
    public function deleteCategory($category_ID)
    {
        $this->AuthLogin();
        DB::table('tbl_category')->where('category_id', $category_ID)->delete();
        return Redirect::to('/show-category')->with('message', 'Xoá Thành Công');
    }
    public function unactive_Category($category_ID)
    {
        $this->AuthLogin();
        DB::table('tbl_category')->where('category_id', $category_ID)->update(['category_status' => 0]);

        return Redirect::to('/show-category')->with('message', 'Ẩn Thành Công');
    }
    public function active_Category($category_ID)
    {
        $this->AuthLogin();
        DB::table('tbl_category')->where('category_id', $category_ID)->update(['category_status' => 1]);
        return Redirect::to('/show-category')->with('message', 'Kích Hoạt Thành Công');
    }
    public function show_category_home($category_ID) {
        $cate_product_name = Category::where('category_id', $category_ID)->first();
        $cate_product = Category::where('category_status','1')->orderby('category_id','desc')->get();
        $cate_type_product = Category_type::where('category_type_status','1')->orderby('category_type_id','desc')->get();
        $category = Product::where('category_id',$category_ID)
                            ->where('product_status',1)
                            ->orderby('product_id','asc')
                            ->paginate(8);
        $count = count($category);
        return view('pages.category.filter_category')->with(compact('category','cate_product','cate_type_product','cate_product_name','count'));

    }
}
