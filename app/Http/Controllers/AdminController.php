<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Exports\Order_detail;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
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
use App\Models\Admin;
use App\Models\Statistical;
use Validator;
use Excel;
session_start();

class AdminController extends Controller

{
  public function AuthLogin(){
    $admin_id = Session::get('admin_id');
    $assistant_id = Session::get('assistant_id');
    if($admin_id || $assistant_id){
        return Redirect::to('dashboard');
    }else{
        return Redirect::to('admin')->send();
    }
}
    public function index(){

        return view('admin_login');
    }
    public function showdashboard(){
      $this->AuthLogin();
     $total = Statistical::find(1);
      $comment = count(Comment::where('comment_status',1)->get());
      $product_sold = count(Product::where('product_sold','>',0)->get());
      $product = count(Product::all());
      $assistant = count(Admin::where('level',1)->get());
      $customer = count(Customer::all());
      $new_Order = count(Order::where('order_status',1)->get());

        return view('admin.dashboard')->with(compact('new_Order','customer','assistant','product','product_sold','comment','total'));
    }
    public function dashboard(Request $request){

        $admin_user = $request->admin_user;
        $admin_password = md5($request->admin_password);


        $result = DB::table('tbl_admin')->where('admin_user',$admin_user)->where('admin_password', $admin_password)->first();


if($result->level==0){
    Session::put('admin_name',$result->admin_name);
    Session::put('admin_id',$result->admin_id);
    Session::put('level',$result->level);
    return Redirect::to('/dashboard');
}elseif ($result->level==1) {
    Session::put('admin_name',$result->admin_name);
         Session::put('assistant_id',$result->admin_id);
         Session::put('level',$result->level);
         return Redirect::to('/dashboard');
}else{
    Session::put('massage','Sai Mật Khẩu !!!');
        return Redirect::to('/admin');
}


        }
        public function logout() {
          $this->AuthLogin();
          Session::forget('admin_name',null);
          Session::forget('admin_id');
          Session::forget('assistant_id',null);
          return Redirect::to('/admin');
        }
        public function show_customer(){
            $this->AuthLogin();
            $admin = Admin::where('level',0)->get();
            $asistant = Admin::where('level',1)->get();
            $customer = Customer::all();
            $count =  $customer->count();
            return view('admin.customer.show_customer')->with(compact('admin','customer','asistant','count'));

        }
        public function show_profile($id){
            // $admin = Admin::where('level',0)->get();
            // $asistant = Admin::where('level',1)->get();
            // $customer = Customer::all();
            // $count =  $customer->count();
            $this->AuthLogin();
            $admin_id = Admin::find($id);

            return view('admin.customer.show_profile_admin')->with(compact('admin_id'));

        }
        public function update_admin(Request $request){
            $data = $request->all();
            $admin = Admin::find($data['id']);
            $admin->admin_name=$data['admin_name'];
            $admin->admin_user= $data['admin_user'];
            if($admin->admin_password == $data['admin_password'] ){
                $admin->admin_password= $data['admin_password'];
            }else{
                $admin->admin_password= md5($data['admin_password']);
            }

            $admin->level= $data['level'];
            $admin->save();
        }
        public function store_admin(Request $request){


                $validator = Validator::make($request->all(), [
                    'user' => 'required|unique:tbl_admin,admin_user',
                    'name' => 'required',
                    'password' => 'required',
                    'level' => 'required'],
                    [
                        'user.required'  => 'Tài Khoản Không Được Để Trống !',
                        'user.unique'  => 'Tài Khoản Này Đã Có Rồi  !',
                        'name.required' => 'Tên Không Được Để Trống !',
                        'password.required' => 'Mật Khẩu Không Được Để Trống !',
                    ]

                );

                if ($validator->passes()) {
                    $admin = new Admin();
                    $admin->admin_user = $request->user;
                    $admin->admin_password =md5($request->password);
                    $admin->admin_name = $request->name;
                    $admin->level = $request->level;
                    $admin->save();

                    // Session::put('customer_id', $customer_id);


                }

                return response()->json(['error'=>$validator->errors()->all()]);
            }
            public function show_profile_customer($id){
                $customer = Customer::find($id);
                $cus_info = Customer::where('customer_id',$id)->first();
                $cusid =Order::where('customer_id',$id)->get();
                $cou = count($cusid);
                     if($cou == 0){

                          return view('admin.customer.show_profile_customer')->with(compact('cou','cus_info','customer'));

                      }
                      else{
                          foreach ($cusid as $key => $code) {
                              $order_code = $code['order_code'];
                          }
                          $order_details = Order_details::with('product')->where('order_code',$order_code)->get();
                          $order = Order::where('order_code',$order_code)->get();
                          foreach($order as $key => $ord){
                              $customer_id = $ord->customer_id;
                              $shipping_id = $ord->shipping_id;
                              $order_status = $ord->order_status;
                          }
                          $customer = Customer::where('customer_id',$customer_id)->first();
                          $shipping = Shipping::where('shipping_id',$shipping_id)->first();

                      $order_details_product = Order_details::with('product')->where('order_code', $order_code)->get();

                      $store_order_details = Order_details::with('product')
                                                          ->where('customer_id',$id)
                                                          ->orderby('order_details_id','desc')->get();
                   return view('admin.customer.show_profile_customer')->with(compact('cus_info','order_details','customer','shipping' ,'order','order_status','order_code','store_order_details','cusid','customer'));
                      }
            }
            public function update_customer(Request $request){
                $data = $request->all();
                $customer = Customer::find($data['id']);
                $customer->customer_name=$data['name'];
                $customer->customer_email= $data['email'];
                if($customer->customer_password == $data['password'] ){
                    $customer->customer_password= $data['password'];
                }else{
                    $customer->customer_password= md5($data['password']);
                }

                $customer->customer_phone= $data['phone'];
                $customer->customer_address= $data['address'];
                $customer->save();
            }
            public function store_customer(Request $request){


                $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'email' => 'required|email|unique:tbl_customers,customer_email',
                    'password' => 'required',
                    'address' => 'required',
                    'phone' => 'required|numeric|min:11'],
                    [
                        'name.required'  => 'Tài Khoản Không Được Để Trống !',
                        'email.unique'  => 'Địa Chỉ Email Này Đã Có Rồi  !',
                        'password.required' => 'Mật Khẩu Không Được Để Trống !',
                        'address.required'  => 'Địa Chỉ Không Được Để Trống !',
                        'email.required' => 'Email Không Được Để Trống !',
                        'email.email' => 'Email Phải Có Thêm @ !',
                        'password.required' => 'Mật Khẩu Không Được Để Trống !',
                        'phone.required' => 'Số Điện Thoại Không Được Để Trống !',
                        'phone.numeric' => ' Số Điện Thoại phải là một số không có ký tự đặc biệt !',
                        'phone.min' => 'Số Điện Thoại phải là dãy số có 10 chữ số !',
                    ]

                );

                if ($validator->passes()) {
                    $customer = new Customer();
                    $customer->customer_name = $request->name;
                    $customer->customer_password =md5($request->password);
                    $customer->customer_email = $request->email;
                    $customer->customer_phone = $request->phone;
                    $customer->customer_address = $request->address;
                    $customer->save();



                    // Session::put('customer_id', $customer_id);


                }

                return response()->json(['error'=>$validator->errors()->all()]);

            }
            public function export_csv(){
                return Excel::download(new Order_detail , 'category_product.xlsx');

            }
            public function delete_admin(Request $request){
                $data = $request->all();
                    $counpon = Admin::find($data['id']);
                    $counpon->delete();
            }
            public function delete_customer(Request $request){
                $data = $request->all();
                    $counpon = Customer::find($data['id']);
                    $counpon->delete();
            }
        }
