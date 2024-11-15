<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oc24wzuseraccounts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('wzuser_id');
            $table->unsignedInteger('wzaccount_id');
            $table->string('role', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oc24wzuseraccounts');
    }
};
