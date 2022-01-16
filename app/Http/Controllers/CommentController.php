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
use App\Models\Counpon;
use App\Models\Comment;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
class CommentController extends Controller
{
    public function show_comment(){
        $comment = Comment::orderby('comment_status','DESC')->with('product')->get();


        return view('admin.comment.show_comment')->with(compact('comment'));
    }
    public function unnative_comment($id){
        $status = Comment::find($id);

        if ($status) {
            $status->comment_status=1;
            $status->save();

        }
        return Redirect::to('show-comment')->with('message','Gỡ Phê Duyệt Thành Công');
    }
    public function native_comment($id){
        $status = Comment::find($id);

        if ($status) {
            $status->comment_status=0;
            $status->save();

    }
    return Redirect::to('show-comment')->with('message','Phê Duyệt Thành Công');
}
public function delete_comment($id){
    $comment = Comment::find($id);
    $comment->delete();
    return Redirect::to('show-comment')->with('message','Xoá Bình Luận Thành Công');
}
}
