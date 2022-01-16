<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_blog', function (Blueprint $table) {
            $table->Increments('blog_id'); // ID sản Phẩm
            $table->string('blog_title');// ID loại sản phẩm
            $table->string('blog_tag');// ID loại sản phẩm
            $table->string('blog_thumnail');// ID loại sản phẩm
            $table->string('blog_desc');// ID loại sản phẩm
            $table->string('date_public');// Tên Sản Phẩm
            $table->integer('blog_status');// Số Lượng Sản Phẩm
            $table->integer('blog_highlight');// Giá Sản Phẩm
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_blog');
    }
}
