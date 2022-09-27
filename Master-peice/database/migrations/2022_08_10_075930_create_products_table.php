<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->string('product_desc');
            $table->text('product_image');
            $table->decimal('price');
            $table->decimal('max_number');
            $table->tinyInteger('status')->default('0');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('CASCADE');
            // $table->unsignedInteger('user_id');
            // $table->foreign('user_id')->on('users')->references('id')->onDelete('CASCADE');
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
        Schema::dropIfExists('products');
    }
}
