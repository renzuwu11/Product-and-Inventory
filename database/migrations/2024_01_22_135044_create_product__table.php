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
        Schema::create('product', function (Blueprint $table) {
            $table->id('ProductID');
            $table->unsignedBigInteger('CategoryID');
            $table->string('ProdName');
            $table->text('ProdDescription');
            $table->text('ProdMaterial');
            $table->string('ProdWeight');
            $table->string('ProdSize');
            $table->decimal('UnitPrice', 10, 2);
            $table->decimal('ProdDiscount', 10, 2)->nullable();
            $table->integer('Stock')->default(0);
            $table->string('ProdImage');
            $table->timestamps();
            $table->unsignedBigInteger('CreatedBy');
            $table->unsignedBigInteger('UpdatedBy')->nullable();

            $table->foreign('CategoryID')->references('CategoryID')->on('category');
            $table->foreign('CreatedBy')->references('EmployeeID')->on('employee');
            $table->foreign('UpdatedBy')->references('EmployeeID')->on('employee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
