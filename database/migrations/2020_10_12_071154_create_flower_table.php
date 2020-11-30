<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlowerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flower', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->string('name');
            $table->string('desc');
            $table->string('flowerImage');
            $table->unsignedBigInteger("CategoryID");
            $table->foreign('CategoryID')->references('id')->on('flower_category');
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
        Schema::dropIfExists('flower');
    }
}
