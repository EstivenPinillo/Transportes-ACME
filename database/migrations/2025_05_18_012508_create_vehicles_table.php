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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreign('owner_id')->references('id')->on('users');
            $table->unsignedBigInteger('owner_id');
            $table->string('license_plate', 80);
            $table->string('color', 80);
            $table->string('brand', 80);
            $table->enum('type', ['public', 'private']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
