<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Cars', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name');
            $table->integer('price');
            $table->string('description');
            $table->string('company');
            $table->string('mainImage');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('manufacture');
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
        //
        Schema::dropIfExists('Cars');
    }
};
