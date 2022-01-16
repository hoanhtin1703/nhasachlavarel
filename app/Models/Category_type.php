<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_type extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'category_type_name','category_type_status','category_id'
    ];
    protected $primaryKey = 'category_type_id';
 	protected $table = 'tbl_category_type';
     public function category_type(){
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
