<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCounpoun extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_counpon', function (Blueprint $table) {
            $table->bigIncrements('counpon_id');
            $table->string('counpon_name');
            $table->string('counpon_code');
            $table->integer('counpon_quantity');
            $table->string('price_discount');
            $table->integer('counpon_status');
            $table->integer('counpon_apply');
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
        Schema::dropIfExists('tbl_counpon');
    }
}
