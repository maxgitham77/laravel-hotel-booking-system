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
        Schema::create('rooms', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained('users');
            $table->foreignUuid('roomtype_id')->constrained('room_types')->onDelete('cascade');
            $table->foreignUuid('roomnumber_id')->constrained('room_numbers')->onDelete('cascade');
            $table->string('room_name')->nullable();
            $table->string('slug')->nullable();
            $table->integer('number_of_adult');
            $table->integer('number_of_children');
            $table->integer('room_capacity')->default(1);
            $table->string('image');
            $table->decimal('price', 10, 2);
            $table->string('size');
            $table->string('view')->nullable();
            $table->string('bed_size');
            $table->decimal('discount', 10, 2)->default(0.00);
            $table->text('short_description');
            $table->text('description');
            $table->boolean('smoking_allowed')->default(0);
            $table->boolean('cooking_allowed')->default(0);
            $table->boolean('available')->default(1);
            $table->boolean('featured')->default(1);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
