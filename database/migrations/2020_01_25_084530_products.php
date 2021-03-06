<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->bigIncrements('Product_id');
            $table->string('Product_name',100);
            $table->string('Product_description',500);
            $table->integer('Amount');
            $table->integer('Discount');
            $table->integer('category');
            $table->timestamps();
            // $table->integer('Product_id',50)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
}
