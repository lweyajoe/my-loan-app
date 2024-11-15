<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oc24groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->default(0);
            $table->string('name', 255);
            $table->string('code', 255)->nullable();
            $table->boolean('affects_gross')->default(false);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oc24groups');
    }
};
