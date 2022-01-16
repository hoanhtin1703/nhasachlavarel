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
use App\Models\BLog;
use App\Models\Counpon;
use App\Models\Banner;
use App\Models\Contact;
use Mail;
use App\Mail\NotifyMail;
session_start();

class HomeController extends Controller
{
  // public function show(){
  //   $cate_product = DB::table('tbl_category')->where('category_status','1')->orderby('category_id','desc')->get();
  //   $cate_type_product = DB::table('tbl_category_type')->where('category_type_status','1')->orderby('category_type_id','desc')->get();
  // //   $product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','asc')->limit(4)->get();
  //   $product = DB::table('tbl_product')->get();
  //   return view('welcome')->with('category',$cate_product)->with('category_type',$cate_type_product)->with('product',$product);
  // }

    public function index(){
        $product_comic_random=Product::where('category_id',3)->where('product_status',1)->inRandomOrder()
        ->limit(2)->get();
        $product_comic = Product::where('category_id',3)->where('product_status',1)->inRandomOrder()
        ->limit(7)->get();
        $banner =Banner::where('banner_status',1)->get();
        $coupon = Counpon::where('counpon_status',0)->whereNotIn('counpon_code',['khong'])->limit(4)->get();
        $blog = Blog::where('blog_highlight',0)->get();
        $product_hight = Product::where('star_rating','>',0)->where('product_status',1)->orderby('star_rating','desc')->limit(7)->get();
        $product_new_2 = Product::where('product_status',1)->orderby('product_id','asc')->limit(2)->get();
        $product_sold = Product::where('product_status',1)->where('product_sold','>',1)->orderby('product_id','asc')->limit(6)->get();
        $product_new = Product::where('product_status',1)->orderby('product_id','asc')->limit(6)->get();
        $cate_product = DB::table('tbl_category')->where('category_status','1')->orderby('category_id','desc')->get();
      $cate_type_product = DB::table('tbl_category_type')->where('category_type_status','1')->orderby('category_type_id','desc')->get();
        return view('pages.home')->with('cate_product',$cate_product)->with('category_type',$cate_type_product,)->with(compact('product_new','product_sold','blog','product_new_2','product_hight','coupon','banner','product_comic','product_comic_random'));

    }
    public function show_product(){
        $cate_product = Category::where('category_status','1')->orderby('category_id','desc')->get();
        $cate_type_product = Category_type::where('category_type_status','1')->orderby('category_type_id','desc')->get();
        $product = Product::where('product_status',1)->inRandomOrder()
        ->limit(8)->orderby('product_id','asc')->paginate(8);
        return view('pages.product.all_product')->with(compact('cate_product','cate_type_product','product'));

    }
        public function fetch_data(Request $request){
            if($request->ajax())
            {
             $product = Product::where('product_status',1)->orderby('product_id','asc')->paginate(8);
             return view('elements.paginate_product')->with(compact('product'))->render();
            }
        }
        public function fetch_data_cate(Request $request){
            if($request->ajax())
            {
                $cate_id = $request->cate_id;
             $category = Product::where('product_status',1)->where('category_id',$cate_id)->orderby('product_id','asc')->paginate(8);
             return view('elements.paginate_category')->with(compact('category'))->render();
            }
        }
        public function fetch_data_cate_type(Request $request){
            if($request->ajax())
            {
                $cate_type_id = $request->cate_type_id;
             $category_type = Product::where('product_status',1)->where('category_type_id',$cate_type_id)->orderby('product_id','asc')->paginate(8);
             return view('elements.paginate_category_type')->with(compact('category_type'))->render();
            }
        }

    public function search_info(Request $request){
      $keywords = $request->search_info;
      $cate_product = Category::where('category_status','1')->orderby('category_id','desc')->get();
      $cate_type_product = Category_type::where('category_type_status','1')->orderby('category_type_id','desc')->get();
      $product = Product::where('product_name','LIKE','%'.$keywords.'%')
                          ->orderby('product_id','desc')->paginate(8);

   return view('pages.search_product')->with(compact('cate_product','cate_type_product','product'));
    }
    public function auto_complete(Request $request){
        $data = $request->all();
        $output='';
        if ($data['query']){
        $product = Product::where('product_status',1)->where('product_name','LIKE','%'.$data['query'].'%')->distinct()->get();

            foreach ($product as $key => $value) {
                $output.='<p style="margin: 0;
                padding: 7px 10px;
                border: 1px solid #CCCCCC;
                border-top: none;
                cursor: pointer;><a class="search_result" href="javascript:void(0)" >'.$value->product_name.'</a></p>';
            }


echo $output;
        }
    }
public function load_comment(Request $request){
$comment_product_id = $request->comment_product_id;
$comment = Comment::where('comment_product_id',$comment_product_id )->where('comment_status',0)->get();

foreach ($comment as $key => $comm) {
    if($comm->comment==null){
        $comm->comment = "Chưa có bình luận";
    }
$output='';

    $calculate =$comm->star_rating *20;
    $output .=' <div class="row no-gutters">
<div class="col-auto">
    <h4><a href="javascript:void(0)">'.$comm->comment_name.'</a></h4>
    <div class="ratings-container">
        <div class="ratings">
            <div class="ratings-val" style="width:'.$calculate.'%;"></div><!-- End .ratings-val -->
        </div><!-- End .ratings -->
    </div><!-- End .rating-container -->
    <span style="color:black;" class="review-date">'.$comm->date.'</span>
</div><!-- End .col -->
<div class="col">
    <div class="review-content">
        <h4>'.$comm->comment.'</h4>
    </div><!-- End .review-content -->
   <!-- End .review-action -->
</div><!-- End .col-auto -->
</div>
<hr>';
echo $output;
    }
}
public function send_comment(Request $request){
    $comment_product_id = $request->comment_product_id;
    $comment_content = $request->comment;
    $star = $request->star;
    if(Session::get('customer_id')){
$customer = Customer::find(Session::get('customer_id'))->first();
$customer_name = $customer->customer_name;
    }else{
        $customer_name='Khách';
    }
    $comment = new Comment();
    $comment->comment = $comment_content;
    $comment->comment_name = $customer_name;

    $comment->comment_product_id =$comment_product_id;
    $comment->star_rating=$star;
    $comment->comment_status =1;
    $comment->save();

    $star_rating = Comment::select('star_rating')->where('comment_product_id',$request->comment_product_id)
    ->avg('star_rating');

    $product = Product::find($request->comment_product_id);
    if($product){
    if($product->star_rating==0){
    $product->star_rating = $star_rating;
    $product->save();}
    else{
        $product->star_rating = $star_rating;
        $product->save();
    }
    }

}
public function show_blog (){
    $cate_product = Category::where('category_status','1')->orderby('category_id','desc')->get();
    $blog = Blog::where('blog_status',1)->paginate(6);
return view('pages.blog.show_blog')->with(compact('blog','cate_product'));
}
public function show_detail_blog($id){
    $cate_product = Category::where('category_status','1')->orderby('category_id','desc')->get();
    $blog = Blog::where('blog_id',$id)->first();
 $related_blog = Blog::whereNotIn('blog_id',[$id])->get();
return view('pages.blog.detail_blog')->with(compact('blog','related_blog','cate_product'));
}
public function contact(){
    $cate_product = Category::where('category_status','1')->orderby('category_id','desc')->get();
    return view('pages.contact.contact')->with(compact('cate_product'));
}
public function send_contact(Request $request){

$detail =[
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'subject' => $request->subject,

];

    Mail::to('bestielibraryshop@gmail.com')->send(new NotifyMail($detail));

    // return redirect('/contact');

}
public function introduce(){
    $cate_product = Category::where('category_status','1')->orderby('category_id','desc')->get();
return view('pages.introduce.introduce')->with(compact('cate_product'));
}
}

