<?php

namespace App\Http\Controllers;

use App\Exports\Order_detail;
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
use App\Models\Counpon;
use App\Models\Statistical;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromArray;
class OrderController extends Controller
{
    public function manage_order(){
    	$order = Order::orderby('order_status','ASC')->get();
    	return view('admin.order.show_order')->with(compact('order'));
    }
    public function update_qty(Request $request){
		$data = $request->all();
		$order_details = Order_details::where('product_id',$data['order_product_id'])->where('order_code',$data['order_code'])->first();
		$order_details->product_sales_quantity = $data['order_qty'];
		$order_details->save();
	}
    public function update_order_qty(Request $request){
		//update order
		$data = $request->all();
		$order = Order::find($data['order_id']);
		$order->order_status = $data['order_status'];
		$order->save();
		if($order->order_status==2){
            $status = Order_details::find($data['order_detail_id']);
            $status->order_status = 2;
            $status->save();
            $total = Statistical::find(1);
            $total->total += $data['sumtotal'];
            $total->save();
			foreach($data['order_product_id'] as $key => $product_id){
				$product = Product::find($product_id);
				$product_quantity = $product->product_quantity;
				$product_sold = $product->product_sold;
				foreach($data['quantity'] as $key2 => $qty){
						if($key==$key2){
								$pro_remain = $product_quantity - $qty;
								$product->product_quantity = $pro_remain;
								$product->product_sold = $product_sold + $qty;
								$product->save();
						}
				}
			}
		}elseif($order->order_status!=2){
            $status = Order_details::find($data['order_detail_id']);
            $status->order_status = 1;
            $status->save();
            $total = Statistical::find(1);
                $total->total -=$data['sumtotal'];
                $total->save();
			foreach($data['order_product_id'] as $key => $product_id){
				$product = Product::find($product_id);
				$product_quantity = $product->product_quantity;
				$product_sold = $product->product_sold;
				foreach($data['quantity'] as $key2 => $qty){
						if($key==$key2){
								$pro_remain = $product_quantity + $qty;
								$product->product_quantity = $pro_remain;
								$product->product_sold = $product_sold - $qty;
								$product->save();
						}
				}
			}
		}
	}
    public function view_soldproduct(){
        $order1 = Order_details::with('product')->where('order_status',2)->get();
                $coupon = Counpon::select('price_discount','counpon_code')->get();
        return view('admin.products.show_soldproduct')->with(compact('coupon','order1'));
    }
    public function view_new_order(){
        $order1 = Order_details::with('product')->where('order_status',1)->get();
                $coupon = Counpon::select('price_discount','counpon_code')->get();
        return view('admin.products.show_new_order')->with(compact('coupon','order1'));
    }
    public function view_order($order_code){
        $order_details = Order_details::with('product')->where('order_code',$order_code)->get();
		$order = Order::where('order_code',$order_code)->get();
		foreach($order as $key => $ord){
			$customer_id = $ord->customer_id;
			$shipping_id = $ord->shipping_id;
			$order_status = $ord->order_status;
		}
		$customer = Customer::where('customer_id',$customer_id)->first();
		$shipping = Shipping::where('shipping_id',$shipping_id)->first();

		// $order_details_product = Order_details::with('product')->where('order_code', $order_code)->get();
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
		// 	$product_coupon = $order_d->product_coupon;
		// }
        return view('admin.order.view_order_details')->with(compact('order_details','customer','shipping','order_details','order','order_status','counpon_price'));
    }

}
