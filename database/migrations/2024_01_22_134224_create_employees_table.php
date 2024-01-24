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
        Schema::create('employee', function (Blueprint $table) {
            $table->id('EmployeeID');
            $table->string('EmpFirstName');
            $table->string('EmpLastName');
            $table->string('EmpMiddleName')->nullable();
            $table->string('EmpEmail')->unique();
            $table->string('password')->unique();
            $table->bigInteger('EmpContactNumber')->unique();
            $table->string('EmpImage')->nullable()->default('public/assests/img/avatars/default_image.jpg');
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
        Schema::dropIfExists('employee');
    }
};