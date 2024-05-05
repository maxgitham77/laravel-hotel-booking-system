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
        Schema::create('teams', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('image');
            $table->string('name');
            $table->string('position');
            $table->string('facebook_link')->nullable();
            $table->string('x_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->boolean('show_in_home_page')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
