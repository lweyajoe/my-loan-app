<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oc24wzsettings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sitename', 255)->nullable();
            $table->string('drcr_toby', 255)->nullable();
            $table->boolean('enable_logging')->default(0);
            $table->integer('row_count')->default(10);
            $table->boolean('user_registration')->default(0);
            $table->boolean('admin_verification')->default(0);
            $table->boolean('email_verification')->default(0);
            $table->string('email_protocol', 255)->nullable();
            $table->string('email_host', 255)->nullable();
            $table->integer('email_port')->default(0);
            $table->boolean('email_tls')->default(0);
            $table->string('email_username', 255)->nullable();
            $table->string('email_password', 255)->nullable();
            $table->string('email_from', 255)->nullable();
            $table->string('others', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oc24wzsettings');
    }
};
