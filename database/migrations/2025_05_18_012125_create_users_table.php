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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->unsignedBigInteger('profile_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedBigInteger('city_id');
            $table->foreign('type_document_id')->references('id')->on('type_documents');
            $table->unsignedBigInteger('type_document_id');
            $table->string('first_name', 40);
            $table->string('second_name', 40)->nullable();
            $table->string('last_name', 80);
            $table->string('address', 200);
            $table->string('phone_number', 200);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);
            $table->index(['id', 'email', 'profile_id']);
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
