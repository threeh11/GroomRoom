<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();

            $table->string('alias');
            $table->string('type');
            $table->string('male');
            $table->date('dateBirthdDay');
            $table->string('race');

            $table->boolean('published')->default(true);
            $table->timestamp('published_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pets');
    }
};
