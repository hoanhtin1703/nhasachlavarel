<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'blog_title','blog_tag','blog_thumnail','blog_desc','date_public','blog_status','blog_highlight'
    ];
    protected $primaryKey = 'blog_id';
 	protected $table = 'tbl_blog';
}
