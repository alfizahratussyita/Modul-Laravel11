<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFruitsTable extends Migration
{
    public function up()
    {
        Schema::create('fruits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fruits');
    }
}
