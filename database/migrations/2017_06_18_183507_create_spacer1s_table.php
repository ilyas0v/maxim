<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpacer1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spacer1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quote')->default("There is huge space beetween creativity and imagination");
            $table->string('author')->default('Mark Simmons, Nett Media');
            $table->string('background')->default('rgb(27, 172, 145)');
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
        Schema::dropIfExists('spacer1s');
    }
}
