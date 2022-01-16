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
session_start();
class ProductController extends Controller
{
  public function AuthLogin(){
    $admin_id = Session::get('admin_id');
    if($admin_id){
        return Redirect::to('dashboard');
    }else{
        return Redirect::to('admin')->send();
    }
}
    public function show_Product(Request $request)

    {
      $this->AuthLogin();
      $search = $request->search;
      if(isset($search)){

      $all_product = DB::table('tbl_product')->where('product_name','LIKE','%'.$search.'%')
      ->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')
      ->join('tbl_category_type','tbl_category_type.category_type_id','=','tbl_product.category_type_id')
      ->orderby('tbl_product.product_id','desc')->paginate(5);
      // $$all_product->withPath('/show-category/search');
      // dd($all_product);
    } else {
      $all_product = DB::table('tbl_product')
      ->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')
      ->join('tbl_category_type','tbl_category_type.category_type_id','=','tbl_product.category_type_id')
      ->orderby('tbl_product.product_id','desc')->get();
    }

    $manager_product=view('admin.products.show_product')->with('list_product',$all_product);
  return view('admin_dashboard')->with('admin.products.show_product',$manager_product );
    }

    public function add_Product()
    {$this->AuthLogin();
        $category = DB::table('tbl_category')->orderby('category_id','desc')->get();
        $category_type = DB::table('tbl_category_type')->orderby('category_type_id','desc')->get();
        return view('admin.products.add_product')->with('cate_type',$category_type)->with('cate',$category);

    }
    public function save_Product(Request $request){
      $this->AuthLogin();
     $data = array();
     $data['category_id'] = $request->category;//ID Danh Mục
     $data['category_type_id'] = $request->category_type;//ID Loại Sản Phẩm
     $data['product_name'] = $request->product_Name;// Tên Sản Phẩm
     $data['product_quantity'] = $request->product_Quantity;// Số Lượng Sản Phẩm
     $data['product_price'] = $request->product_Price;// Giá Sản Phẩm
     $data['product_size'] = $request->product_Size;// Kích thước Sản Phẩm
     $data['product_pages'] = $request->product_Pages;// Kích thước Sản Phẩm
     $data['product_material'] = $request->product_Material;// Chất liệu sản phẩm
     $data['product_desc'] = $request->product_Desc;// Mô tả sản phẩm
     $data['product_author'] = $request->product_Author;//Tác giả
     $data['public_date'] = $request->pubic_Date;// Ngày Xuất Bản
     $data['public_author'] = $request->public_Author;// Nhà xuất bản
     $data['product_status'] = $request->product_Status;// Trạng Thái
     $data['product_image'] = $request->product_Image;// Hình Ảnh1
     $data['product_image1'] = $request->product_Image1;// Hình Ảnh2
     $data['product_image2'] = $request->product_Image2;// Hình Ảnh3
     $get_image = $request->file('product_Image');
     $get_image1 = $request->file('product_Image1');
     $get_image2 = $request->file('product_Image2');
     if($get_image && $get_image1 &&  $get_image2){
        $get_name_image = $get_image->getClientOriginalName();
        $get_name_image1 = $get_image1->getClientOriginalName();
        $get_name_image2 = $get_image2->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $name_image1 = current(explode('.',$get_name_image1));
        $name_image2 = current(explode('.',$get_name_image2));
        $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $new_image1 =  $name_image1.rand(0,99).'.'.$get_image1->getClientOriginalExtension();
        $new_image2 =  $name_image2.rand(0,99).'.'.$get_image2->getClientOriginalExtension();
        $get_image->move('public/upload/product',$new_image);
        $get_image1->move('public/upload/product',$new_image1);
        $get_image2->move('public/upload/product',$new_image2);
        $data['product_image'] = $new_image;
        $data['product_image1'] =$new_image1;// Hình Ảnh2
        $data['product_image2'] = $new_image2;// Hình Ảnh3

        DB::table('tbl_product')->insert($data);
        return Redirect::to('show-product')->with('message','Thêm Sản Phẩm Thành Công');

    }
    $data['product_image1'] ='';
    $data['product_image2'] ='';
    $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
    return Redirect::to('show-product')->with('message','Thêm Sản Phẩm Thành Công');
    }
    public function edit_Product($product_ID){
      $this->AuthLogin();
      $cate_product = DB::table('tbl_category')->orderby('category_id','desc')->get();
      $cate_type_product = DB::table('tbl_category_type')->orderby('category_type_id','desc')->get();

        $edit_product = DB::table('tbl_product')->where('product_id',$product_ID)->get();

        $manager_product  = view('admin.products.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product)->with('cate_type_product',$cate_type_product);

        return view('admin_dashboard')->with('admin.products.edit_product', $manager_product);

    }
     public function update_product(Request $request,$product_ID){
      $this->AuthLogin();
        $data = array();
     $data['category_id'] = $request->category;//ID Danh Mục
     $data['category_type_id'] = $request->category_type;//ID Loại Sản Phẩm
     $data['product_name'] = $request->product_Name;// Tên Sản Phẩm
     $data['product_quantity'] = $request->product_Quantity;// Số Lượng Sản Phẩm
     $data['product_price'] = $request->product_Price;// Giá Sản Phẩm
     $data['product_size'] = $request->product_Size;// Kích thước Sản Phẩm
     $data['product_pages'] = $request->product_Pages;// Kích thước Sản Phẩm
     $data['product_material'] = $request->product_Material;// Chất liệu sản phẩm
     $data['product_desc'] = $request->product_Desc;// Mô tả sản phẩm
     $data['product_author'] = $request->product_Author;//Tác giả
     $data['public_date'] = $request->pubic_Date;// Ngày Xuất Bản
     $data['public_author'] = $request->public_Author;// Nhà xuất bản

        $get_image = $request->file('product_Image');
         $get_image1 = $request->file('product_Image1');
     $get_image2 = $request->file('product_Image2');
        if($get_image && $get_image1 && $get_image2){
                    $get_name_image = $get_image->getClientOriginalName();
                    $get_name_image1 = $get_image1->getClientOriginalName();
                    $get_name_image2 = $get_image2->getClientOriginalName();
                    $name_image = current(explode('.',$get_name_image));
                    $name_image1 = current(explode('.',$get_name_image1));
                    $name_image2 = current(explode('.',$get_name_image2));
                    $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                    $new_image1 =  $name_image1.rand(0,99).'.'.$get_image1->getClientOriginalExtension();
                    $new_image2 =  $name_image2.rand(0,99).'.'.$get_image2->getClientOriginalExtension();
                    $get_image->move('public/upload/product',$new_image);
                    $data['product_image'] = $new_image;
                    $data['product_image1'] =$new_image1;// Hình Ảnh2
                    $data['product_image2'] = $new_image2;// Hình Ảnh3

                    DB::table('tbl_product')->where('product_id',$product_ID)->update($data);
                    // Session::put('message','Cập nhật sản phẩm thành công');
                   return Redirect::to('show-product')->with('message','Cập Nhật Sản Phẩm Thành Công');
        }

        DB::table('tbl_product')->where('product_id',$product_ID)->update($data);
        return Redirect::to('show-product')->with('message','Cập Nhật Sản Phẩm Thành Công');;
    }
    public function delete_Product($product_ID){
      $this->AuthLogin();
      DB::table('tbl_product')->where('product_id',$product_ID)->delete();
      return Redirect::to('show-product')->with('message','Xoá Thành Công');
    }
    public function unactive_Product($product_ID){
      $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_ID)->update(['product_status'=>0]);
        return Redirect::to('show-product')->with('message','Ẩn Thành Công');


    }
    public function active_Product($product_ID){
      $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_ID)->update(['product_status'=>1]);
        return Redirect::to('show-product')->with('message','Kích Hoạt Thành Công');
    }
    public function detail_product($product_ID)
    {
         Session::put('product_id',$product_ID);
         Session::save();
        $star = Comment::select('star_rating')->where('comment_product_id',$product_ID)
                                             ->avg('star_rating');

        $comments = Comment::where('comment_product_id',$product_ID)
                                ->where('comment_status',0)->get();
        $count_comments = $comments->count();
        $cate_product = Category::where('category_status','1')->orderby('category_id','desc')->get();
        $cate_type_product = Category_type::where('category_type_status','1')->orderby('category_type_id','desc')->get();
    //   $detail_product =DB::table('tbl_product')
    //   ->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')
    //   ->join('tbl_category_type','tbl_category_type.category_type_id','=','tbl_product.category_type_id')
    //   ->where('tbl_product.product_id',$product_ID)->get();
    //   $cate_product = Category::where('category_status','1')->orderby('category_id','desc')->get();
    //   $cate_type_product = Category_type::where('category_type_status','1')->orderby('category_type_id','desc')->get();
      $detail_product = Product::where('product_id',$product_ID)->get();
      $random_product = Product::inRandomOrder()
      ->limit(7)
      ->get();
      foreach($detail_product as $key => $value){
        $category_type_id = $value->category_type_id;
        $category_id = $value->category_id;

      }
      $related_products = Product::where('category_id',$category_id)->whereNotIn('product_id',[$product_ID])->get();
      return view('pages.product.product_detail')->with(compact('cate_product','cate_type_product','detail_product','related_products','count_comments','star','random_product'));
    }
}
