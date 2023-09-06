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
        Schema::create('cars', function (Blueprint $table) {
            $table->id()->unique();
            $table->timestamps();
            $table->string('brand');
            $table->string('model');
            $table->integer('cylinders')->nullable();
            $table->string('cylinder_type');
            $table->string('description');
            $table->integer('milage');
            $table->string('car_image');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
