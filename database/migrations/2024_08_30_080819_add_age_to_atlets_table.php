<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('atlets', function (Blueprint $table) {
            $table->integer('age')->after('name'); // Menambahkan kolom 'age'
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('atlets', function (Blueprint $table) {
            //
        });
    }
};
