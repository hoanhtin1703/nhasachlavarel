<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use App\Models\Counpon;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class CustomerController extends Controller
{
    public function show_info($cus_id){
        $coupon = Counpon::where('counpon_status',0)->whereNotIn('counpon_code',['khong'])->limit(4)->get();
        $cate_product = Category::where('category_status','1')->orderby('category_id','desc')->get();
        $cus_info = Customer::where('customer_id',$cus_id)->first();
      $cusid =Order::where('customer_id',$cus_id)->get();

      $cou = count($cusid);
           if($cou == 0){

                return view('pages.customer.infocustomer')->with(compact('cou','cus_info','cate_product','coupon'));

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

                foreach($order_details as $key => $value){
                    $coupon_code = $value['product_counpon'];
            }
            // echo $order_details;
            // foreach($order_details_product as $key => $order_d){
    if($coupon_code !== 'khong'){
        $counpon_price = Counpon::where('counpon_code',$coupon_code)->get();
        foreach ($counpon_price as $key => $cou_price) {
           $counpon_price = $cou_price['price_discount'];
        }
    }
    else{
        $counpon_price=0;
    }
            $order_details_product = Order_details::with('product')->where('order_code', $order_code)->get();

            $store_order_details = Order_details::with('product')
                                                ->where('customer_id',$cus_id)
                                                ->orderby('order_details_id','desc')->get();
         return view('pages.customer.infocustomer')->with(compact('cus_info','order_details','customer','shipping' ,'order','order_status','order_code','store_order_details','cusid','cate_product','coupon','counpon_price'));
            }



    }
    // public function show_order($cus_id){


    //     $cusid =Order::where('customer_id',$cus_id)->get();
    //     $cou = count($cusid);

    //        if($cou == 0){
    //             //  $order_details = Order_details::with('product')->where('order_code',$order_code)->get();
    //             // $order = Order::where('order_code',$order_code)->get();
    //             // foreach($order as $key => $ord){
    //             //     $customer_id = $ord->customer_id;
    //             //     $shipping_id = $ord->shipping_id;
    //             //     $order_status = $ord->order_status;
    //             // }
    //             // $customer = Customer::where('customer_id',$customer_id)->first();
    //             // $shipping = Shipping::where('shipping_id',$shipping_id)->first();

    //             // $order_details_product = Order_details::with('product')->where('order_code', $order_code)->get();
    //             // return view('pages.customer.order_details')->with(compact('order_details','customer','shipping' ,'order','order_status','order_code'));
    //             return view('pages.customer.order_details')->with(compact('cou'));

    //         }

    //         else{
    //             foreach ($cusid as $key => $code) {
    //                 $order_code = $code['order_code'];
    //             }
    //             $order_details = Order_details::with('product')->where('order_code',$order_code)->get();
    //             $order = Order::where('order_code',$order_code)->get();
    //             foreach($order as $key => $ord){
    //                 $customer_id = $ord->customer_id;
    //                 $shipping_id = $ord->shipping_id;
    //                 $order_status = $ord->order_status;
    //             }
    //             $customer = Customer::where('customer_id',$customer_id)->first();
    //             $shipping = Shipping::where('shipping_id',$shipping_id)->first();

    //             $order_details_product = Order_details::with('product')->where('order_code', $order_code)->get();
    //             return view('pages.customer.order_details')->with(compact('order_details','customer','shipping' ,'order','order_status','order_code'));
    //         }



    //     // else{

    //         // return view('pages.customer.order_details')->with(compact('cusid'));
    //     // }
    //     // return view('pages.customer.order_details')->with(compact('order_code'));
    //     // echo $order_details;
	// 	// foreach($order_details_product as $key => $order_d){

	// 	// 	$product_coupon = $order_d->product_coupon;
	// 	// }
    //     // return view('pages.customer.order_details')->with(compact('order_details','customer','shipping' ,'order','order_status','order_code'));

    // }
    public function show_store_order($cus_id){

        $order =Order::where('customer_id',$cus_id)->get();
        $cou = count($order);
        if($cou==0){
            return view('pages.customer.show_store_order')->with(compact('cou'));
        }else{
            foreach ($order as $key => $code) {
                $order_code =$code['order_code'];
               $shipping_id= $code['shipping_id'];
               $order_created_at= $code['created_at'];
    }

    $store_order_details = Order_details::with('product')
                                        ->where('customer_id',$cus_id)
                                        ->orderby('order_details_id','desc')->paginate(5);

 return view('pages.customer.show_store_order')->with(compact('store_order_details','order','order_created_at'));
        }

		// $order_sts = Order::where('order_code',$order_code)->get();
		// foreach($order_sts as $key => $ord){
		// 	$order_status = $ord->order_status;
		// }
		// $customer = Customer::where('customer_id',$cus_id)->first();
		// $shipping = Shipping::where('shipping_id',$shipping_id)->first();

		// $order_details_product = Order_details::with('product')->where('order_code', $order_code)->get();
        // echo $order_details;
		// foreach($order_details_product as $key => $order_d){

		// 	$product_coupon = $order_d->product_coupon;
		// }
        // dd($order);


    }
    public function update_proflie(Request $request){
       $data = $request->all();
            $customer = Customer::find($data['id']);
            $customer->customer_name = $data['name'];
            $customer->customer_email = $data['email'];
            $customer->customer_phone = $data['phone'];
            $customer->customer_address =$data['address'];
            $customer->save();
    }
}
