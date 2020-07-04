<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateV13OrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v13_orders', function (Blueprint $table) {
            $table->id();
            // $table->foreignID('customer_id');
            // $table->integer('numOfOriginals');
            // $table->integer('numOfCopies');
            $table->string('customer_name');
            $table->string('number_of_copies');
            $table->string('payment');
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
        Schema::dropIfExists('v13_orders');
    }
}
