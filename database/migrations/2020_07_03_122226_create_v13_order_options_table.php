<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateV13OrderOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v13_order_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('v13_order_id');
            $table->foreignId('v13_option_id');
            $table->timestamps();

            $table->foreign('v13_order_id')->references('id')->on('v13_orders')->onDelete('cascade');
            $table->foreign('v13_option_id')->references('id')->on('v13_options')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v13_order_options');
    }
}
