<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;


session_start();
class CartController extends Controller
{
    // public function save_cart(Request $request){
    //     // $product_id = $request->product_id_hidden;
    //     // $quantity = $request->quantity;
    //     // $product_info = DB::table('tbl_product')->where('product_id',$product_id)->first();

    //     // $data['id'] = $product_info->product_id;
    //     // $data['qty'] = $quantity;
    //     // $data['name'] = $product_info->product_name;
    //     // $data['price'] = $product_info->product_price;
    //     // $data['weight'] = $product_info->product_price;
    //     // $data['options']['image'] = $product_info->product_image;
    //     // Cart::add($data);
    //     // Cart::destroy();
    //     Cart::destroy();
    //     return Redirect::to('/show-cart');

    // }
    public function show_cart(){
    $cate_product = DB::table('tbl_category')->where('category_status','1')->orderby('category_id','desc')->get();
    $cate_type_product = DB::table('tbl_category_type')->where('category_type_status','1')->orderby('category_type_id','desc')->get();
    return view('pages.cart.show_cart')->with('cate_product',$cate_product)->with('category_type',$cate_type_product);
    }
    public function delete_cart($session_id){
        $cart = Session::get('cart');
        // echo '<pre>';
        // print_r($cart);
        // echo '</pre>';
        if($cart==true){
            foreach($cart as $key => $val){
                if($val['session_id']==$session_id){
                    unset($cart[$key]);
 Session::forget('counpon');
Session::forget('fee');
                }
            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message','Xóa sản phẩm thành công');

        }else{
            return redirect()->back()->with('message','Xóa sản phẩm thất bại');
        }

    }
    public function update_cart(Request $request){
        $data = $request->all();
        $cart = Session::get('cart');
        if($cart==true){
            foreach($data['cart_qty'] as $key => $qty){
                foreach($cart as $session => $val){
                    if($val['session_id']==$key){
                        $cart[$session]['product_quantity'] = $qty;
                    }
                }
            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message','Cập nhật số lượng thành công');
        }else{
            return redirect()->back()->with('message','Cập nhật số lượng thất bại');
        }
    }
    // Session::forget('cart');
    public function add_cart_ajax(Request $request){
        // Session::forget('cart');
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if($cart==true){
            $is_avaiable = 0;
            foreach($cart as $key => $val){
                if($val['product_id']==$data['cart_product_id']){
                    $is_avaiable++;
                }
            }
            if($is_avaiable == 0){
                $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_quantity' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
                );
                Session::put('cart',$cart);
            }
        }else{
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_quantity'=> $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],

            );
            Session::put('cart',$cart);
        }

        Session::save();

    }

// public function update_cart(Request $request){
//     $data = $request->all();
//     $cart = Session::get('cart');
//     if($cart==true){
//         foreach($data['cart_qty'] as $key => $qty){
//             foreach($cart as $session => $val){
//                 if($val['session_id']==$key){
//                     $cart[$session]['product_qty'] = $qty;
//                 }
//             }
//         }
//         Session::put('cart',$cart);
//         return redirect()->back()->with('message','Cập nhật số lượng thành công');
//     }else{
//         return redirect()->back()->with('message','Cập nhật số lượng thất bại');
//     }
// }
// public function update_quantity(Request $request){
//      $rowid = $request->row_ID;
//      $quantity = $request->quantity;
//      Cart::update($rowid,$quantity);
//      return Redirect::to('/show-cart');
// }

}
