<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_name', 'customer_password','customer_email','customer_phone','customer_address'
    ];
    protected $primaryKey = 'customer_id';
 	protected $table = 'tbl_customers';
     public function order(){
        return $this->belongsTo('App\Models\Order', 'order_code');
    }
}
