<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateV13OptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v13_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('v13_type_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('v13_type_id')->references('id')->on('v13_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v13_options');
    }
}
