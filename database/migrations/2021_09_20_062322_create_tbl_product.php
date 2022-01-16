<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->Increments('product_id'); // ID sản Phẩm
            $table->integer('category_id'); // ID danh mục
            $table->integer('category_type_id');// ID loại sản phẩm
            $table->string('product_name');// Tên Sản Phẩm
            $table->integer('product_quantity');// Số Lượng Sản Phẩm
            $table->string('product_price');// Giá Sản Phẩm
            $table->string('product_size');// Kích thước Sản Phẩm
            $table->string('product_material');// Chất liệu sản phẩm
            $table->text('product_desc');// Mô tả sản phẩm
            $table->text('product_image');//Hình ảnh sản phẩm
            $table->string('product_author');//Tác giả
            $table->date('public_date');// Ngày Xuất Bản
            $table->string('public_author');// Nhà xuất bản
            $table->integer('product_status');// Trạng Thái
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
        Schema::dropIfExists('tbl_product');
    }
}
