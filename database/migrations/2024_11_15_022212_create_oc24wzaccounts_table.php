<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oc24wzaccounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label', 255);
            $table->string('db_datasource', 255)->nullable();
            $table->string('db_database', 255)->nullable();
            $table->string('db_host', 255)->nullable();
            $table->integer('db_port')->nullable();
            $table->string('db_login', 255)->nullable();
            $table->string('db_password', 255)->nullable();
            $table->string('db_prefix', 255)->nullable();
            $table->string('db_persistent', 255)->nullable();
            $table->string('db_schema', 255)->nullable();
            $table->string('db_unixsocket', 255)->nullable();
            $table->string('db_settings', 255)->nullable();
            $table->string('ssl_key', 255)->nullable();
            $table->string('ssl_cert', 255)->nullable();
            $table->string('ssl_ca', 255)->nullable();
            $table->boolean('hidden')->default(0);
            $table->string('others', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oc24wzaccounts');
    }
};
