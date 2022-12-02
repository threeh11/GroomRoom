<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('aplications', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();
            
            $table->unsignedBigInteger('pet_id')->nullable();
            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade');
            
            $table->string('type');
            $table->string('place');
            $table->date('date');
            $table->time('time');

            $table->boolean('active');
        });
    }

    public function down()
    {
        Schema::dropIfExists('aplications');
    }
};
