<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'product_name','category_id','category_type_id','product_quantity','product_sold','product_desc','product_size','product_pages','product_price','product_image','product_image1','product_image2','product_status','product_material','product_author','public_date','public_author','star_rating'
    ];
    protected $primaryKey = 'product_id';
 	protected $table = 'tbl_product';
     public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function category_type(){
        return $this->belongsTo('App\Models\Category_type', 'category_type_id');
    }
    public function comment(){
        return $this->hasMany('App\Models\Comment');
    }
}
