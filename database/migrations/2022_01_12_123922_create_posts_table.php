<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();

            $table->string('alias');
            $table->text('decriprion');

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');;

            $table->boolean('published')->default(true);
            $table->timestamp('published_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
