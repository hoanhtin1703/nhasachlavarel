<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_id','order_id','order_code', 'product_id', 'product_name','product_price','product_sales_quantity','product_coupon','product_feeship','product_counpon','order_status'
    ];
    protected $primaryKey = 'order_details_id';
 	protected $table = 'tbl_order_details';

 	public function product(){
 		return $this->belongsTo('App\Models\Product','product_id');
 	}
     public function order(){
        return $this->belongsTo('App\Models\Order','order_id');
     }
     public function customer(){
        return $this->belongsTo('App\Models\Customer','customer_id');
     }

}
