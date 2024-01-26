<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('returns', function (Blueprint $table) {
            $table->id('ReturnID');
            $table->unsignedBigInteger('ProductID');
            $table->unsignedBigInteger('CategoryID');
            $table->integer('ReturnQuantity');
            $table->date('ReturnDate');
            $table->text('ReasonofReturn');

            $table->foreign('ProductID')->references('ProductID')->on('product');
            $table->foreign('CategoryID')->references('CategoryID')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returns');
    }
};
