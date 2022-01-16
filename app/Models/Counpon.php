<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counpon extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'counpon_name', 'counpon_code','price_discount','counpon_status'
    ];
    protected $primaryKey = 'counpon_id';
 	protected $table = 'tbl_counpon';
}
