<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->integer('phone');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->decimal('total_price');
            $table->integer('pincode');
            $table->tinyInteger('status')->default('0');
            $table->string('meassge')->nullable();
            // $table->string('tacking_no');
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
        Schema::dropIfExists('orders');
    }
}
