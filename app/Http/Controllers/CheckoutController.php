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
use App\Models\Counpon;
use Validator;
session_start();

class CheckoutController extends Controller
{

    // đăng ký
    public function register_customer(Request $request){

        $validator = Validator::make($request->all(), [
            'user' => 'required',
            'email' => 'required|email|unique:tbl_customers,customer_email',
            'password' => 'required',
            'phone' => 'required|numeric|min:11'],
            [
                'user.required'  => 'Tài Khoản Không Được Để Trống !',
                'email.unique'  => 'Địa Chỉ Email Này Đã Có Rồi  !',
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
            $customer->customer_name = $request->user;
            $customer->customer_password =md5($request->password);
            $customer->customer_email = $request->email;
            $customer->customer_phone = $request->phone;
            $customer->save();
            $customer_id = $customer->customer_id;
            Session::put('customer_id', $customer_id);


        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }
    // show trang thanh thoán
    public function checkout()
    {
        $customer = Customer::find(Session::get('customer_id'));
        $cate_product = DB::table('tbl_category')->where('category_status','1')->orderby('category_id','desc')->get();
        $city = City::orderby('matp', 'ASC')->get();
        return view('pages.checkout.show_checkout')->with('city', $city)->with(compact('cate_product','customer'));
    }

    // đăng xuất
    public function logout_checkout(Request $request)
    {

        Session::flush();
        return Redirect::to('/');
    }
    // đăng nhập
    public function login_member(Request $request)
    {
        $data = $request->all();
        $email = $data['email'];
        $password = md5($data['password']);
        $result = Customer::where('customer_email', $email)->where('customer_password', $password)->first();

        if ($result) {
            Session::put('customer_id', $result->customer_id);
            Session::put('customer_name', $result->customer_name);
            echo 1;
        } else {
            echo 0;
        }
    }
    // load phí ship
    public function select_delivery_home(Request $request)
    {
        $data = $request->all();
        if ($data['action']) {
            $output = '';
            if ($data['action'] == "city") {
                $select_province = Province::where('matp', $data['ma_id'])->orderby('maqh', 'ASC')->get();
                $output .= '<option>---Chọn quận huyện---</option>';
                foreach ($select_province as $key => $province) {
                    $output .= '<option value="' . $province->maqh . '">' . $province->name_quanhuyen . '</option>';
                }
            } else {

                $select_wards = Wards::where('maqh', $data['ma_id'])->orderby('xaid', 'ASC')->get();
                $output .= '<option>---Chọn xã phường---</option>';
                foreach ($select_wards as $key => $ward) {
                    $output .= '<option value="' . $ward->xaid . '">' . $ward->name_xaphuong . '</option>';
                }
            }
            echo $output;
        }
    }
    // Tính Phí Ship
    public function calculate_fee(Request $request)
    {
        $data = $request->all();

        Session::put('total', $data['total']);
        Session::save();
        if ($data['matp']) {
            $feeship = Feeship::where('fee_matp', $data['matp'])->where('fee_maqh', $data['maqh'])->where('fee_xaid', $data['xaid'])->get();
            if ($feeship) {
                $count_feeship = $feeship->count();
                if ($count_feeship > 0) {
                    foreach ($feeship as $key => $fee) {
                        Session::put('fee', $fee->fee_feeship);
                        Session::save();
                    }
                } else {
                    Session::put('fee', 30000);
                    Session::save();
                }
            }
        }
    }
    public function select_feeship_home()
    {
        $fm_default = number_format(30000, 0, ',', '.');


        if (Session::get('fee') == null) {
            //  $output .= '<h6><a  href="javascript:void(0);">Tổng cộng:'.$tt.'

            //  </a></h6>';
            $output = '';
            $output.='<tr>
            <td>Mã Giảm Giá</td>
            <td>Không có </td>
                 </tr>';
            $output .= ' <tr>
            <td>Phí Vận Chuyển</td>
            <td>'.$fm_default.'vnđ</td>
                 </tr>';

        } elseif(Session::get('counpon') ==null) {

            $subtotal =str_replace('.','',Session::get('total'));
            $feeship = Session::get('fee');
            $fm_fee = number_format($feeship,0,',','.');
            $total = number_format($feeship + $subtotal,0, ',', '.');
            $output = '';
            $output .= '
            <tr>
            <td>Giảm Từ Mã Giảm Giá:</td>
            <td>Không</td>
             </tr>
            <tr>
                    <td>Phí Vận Chuyển :</td>
                    <td>'.$fm_fee.'vnđ</td>
            </tr>
                 <tr class="summary-total">
                 <td>Thành Tiền:</td>
                   <td>'.$total.'vnđ</td>
            </tr>';
            // $fm_total = number_format($total,0,',','.');
        }
         else{
            $coupn = Session::get('counpon');
            $fm_counpon =number_format($coupn,0,',','.');
            $subtotal =str_replace('.','',Session::get('total'));
            $feeship = Session::get('fee');
            $fm_fee = number_format($feeship,0,',','.');
            $total = number_format($feeship + $subtotal-$coupn,0, ',', '.');
            $output = '';
            $output .= '

            <tr>
            <td>Giảm Từ Mã Giảm Giá:</td>
            <td>-'.$fm_counpon.'vnđ</td>
             </tr>
            <tr>
                    <td>Phí Vận Chuyển :</td>
                    <td>'.$fm_fee.'vnđ</td>
            </tr>
                 <tr class="summary-total">
                 <td>Thành Tiền:</td>
                   <td>'.$total.'vnđ</td>
            </tr>';
          }



        echo $output;
    }
    public function select_single_feeship_home() {
        $fm_default = number_format(30000, 0, ',', '.');
        $subtotal = Session::get('total');

        if (Session::get('fee') == null) {

            //  $output .= '<h6><a  href="javascript:void(0);">Tổng cộng:'.$tt.'
            //  </a></h6>';
            $output = '';
            $output .= $fm_default ;

            $output .= ' <br>';
        } else {
            $feeship = number_format(Session::get('fee'), 0, ',', '.');
            // $total = $feeship + $subtotal;
            // $fm_total = number_format($total,0,',','.');
            $output = '';

            $output .=  $feeship;

        }
        echo $output;
    }
    public function select_single_counpon() {
        $fm_default = "khong";
        if (Session::get('coupon_code') == null) {

            //  $output .= '<h6><a  href="javascript:void(0);">Tổng cộng:'.$tt.'
            //  </a></h6>';
            $output = '';
            $output .= $fm_default ;


        } else {
            $counpon = Session::get('coupon_code');
            // $total = $feeship + $subtotal;
            // $fm_total = number_format($total,0,',','.');
            $output = '';

            $output .=  $counpon;

        }
        echo $output;
    }
    // Thanh Toán
    public function confirm_order(Request $request){
        $data = $request->all();
        $shipping = new Shipping();
        $shipping->shipping_name = $data['shipping_name'];
        $shipping->shipping_email = $data['shipping_email'];
        $shipping->shipping_phone = $data['shipping_phone'];
        $shipping->shipping_address = $data['shipping_address'];
        $shipping->shipping_notes = $data['shipping_notes'];
        $shipping->shipping_method = $data['shipping_method'];
        $shipping->save();
        $shipping_id = $shipping->shipping_id;

        $checkout_code = substr(md5(microtime()),rand(0,26),5);


        $order = new Order();
        $order->customer_id = Session::get('customer_id');
        $order->shipping_id = $shipping_id;
        $order->order_code = $checkout_code;
        $order->order_status = 1;

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order->created_at = now();
        $order->save();
        $order_id = $order->order_id;

        if(Session::get('cart')==true){
           foreach(Session::get('cart') as $key => $cart){
               $order_details = new Order_details();
               $order_details->customer_id = Session::get('customer_id');
               $order_details->order_id =$order_id;
               $order_details->order_code = $checkout_code;
               $order_details->product_id = $cart['product_id'];
               $order_details->product_name = $cart['product_name'];
               $order_details->product_price = $cart['product_price'];
               $order_details->product_sales_quantity = $cart['product_quantity'];
            //    $order_details->product_coupon =  $data['order_coupon'];
               $order_details->product_feeship = $data['order_fee'];
               $order_details->product_counpon = $data['order_counpon'];
               $order_details->save();
           }
        }
        Session::forget('counpon');
        Session::forget('fee');
        Session::forget('cart');
   }
//    Check mà giảm giá
   public function check_counpon(Request $request){
        $data = $request->all();
 $count = Counpon::where('counpon_code', $data['fee_coupon'])->get();
 foreach ($count as $key => $value){
        $counpon_code = $value['counpon_code'];
        $counpon_status = $value['counpon_status'];
 }
 $count_coupon = $count->count();
if ($count_coupon ==0 || $data['fee_coupon'] ==null ||   $counpon_status==1){

  echo 1;
}
else
{
    $count_coupon = $count->count();
    if ($count_coupon > 0) {
        foreach ($count as $key => $value) {
            Session::put('counpon', $value->price_discount);
            Session::save();
        }
    } else {
        Session::put('counpon', "Không có");
        Session::save();
    }
    echo 0;
Session::put('coupon_code',$counpon_code);
Session::save();
}


    }
}

