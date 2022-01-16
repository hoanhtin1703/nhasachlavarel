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
use App\Models\Category_type;
use App\Models\Comment;
use App\Models\BLog;
use App\Models\Counpon;
use App\Models\Banner;
use App\Models\Admin;
use App\Models\Statistical;
use Session;
class CounponController extends Controller
{
    public function show_add_counpon(){
return view('admin.counpon.add_coupoun');
    }
    public function show_counpon(){
        $total = Statistical::find(1);
        $comment = count(Comment::where('comment_status',0)->get());
        $product_sold = count(Product::where('product_sold','>',0)->get());
        $product = count(Product::all());
        $assistant = count(Admin::where('level',1)->get());
        $customer = count(Customer::all());
        $new_Order = count(Order::where('order_status',1)->get());
        $coupon = Counpon::all();
        return view('admin.counpon.show_counpon')->with(compact('coupon','new_Order','customer','assistant','product','product_sold','comment','total'));

    }
    public function add_counpon(Request $request){
            $data = $request->all();
            $counpon = new Counpon();
            $counpon->counpon_name = $data['counpon_name'];
            $counpon->counpon_code = $data['counpon_code'];

            $counpon->price_discount = $data['price_discount'];
            $counpon->counpon_status = $data['counpun_status'];
            $counpon->save();
    }
    public function edit_counpon($cou_id){
        $counpon= Counpon::where('counpon_id',$cou_id)->first();
        return view('admin.counpon.edit_coupon')->with(compact('counpon'));
    }
    public function update_counpon(Request $request){
        $data = $request->all();

            $counpon = Counpon::find($data['id']);
            $counpon->counpon_name = $data['counpon_name'];
            $counpon->counpon_code = $data['counpon_code'];

            $counpon->price_discount = $data['price_discount'];
            $counpon->counpon_status = $data['counpun_status'];
            $counpon->save();
    }
    public function delete_counpon(Request $request){
        $data = $request->all();
            $counpon = Counpon::find($data['id']);
            $counpon->delete();
    }
}
