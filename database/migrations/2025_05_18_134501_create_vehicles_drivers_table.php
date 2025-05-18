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
        Schema::create('vehicles_drivers', function (Blueprint $table) {
            $table->id();
            $table->foreign('driver_id')->references('id')->on('users');
            $table->unsignedBigInteger('driver_id');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->unsignedBigInteger('vehicle_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles_drivers');
    }
};
