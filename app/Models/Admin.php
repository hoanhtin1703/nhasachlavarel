<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'admin_user','admin_password','admin_name','level'
    ];
    protected $primaryKey = 'admin_id';
 	protected $table = 'tbl_admin';
}
