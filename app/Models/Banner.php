<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'banner_title','banner_image','banner_status'
    ];
    protected $primaryKey = 'banner_id';
 	protected $table = 'tbl_banner';
}
