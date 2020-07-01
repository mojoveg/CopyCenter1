<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_options', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('location_id');
            // $table->foreignId('option_id');
            // $table->timestamps();

            // $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            // $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_options');
    }
}
