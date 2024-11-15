<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oc24wzusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 255);
            $table->string('password', 255);
            $table->string('fullname', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('timezone', 255)->nullable();
            $table->string('role', 255)->nullable();
            $table->boolean('status')->default(0);
            $table->string('verification_key', 255)->nullable();
            $table->boolean('email_verified')->default(0);
            $table->boolean('admin_verified')->default(0);
            $table->boolean('retry_count')->default(0);
            $table->boolean('all_accounts')->default(0);
            $table->unsignedInteger('default_account')->default(0);
            $table->string('others', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oc24wzusers');
    }
};
