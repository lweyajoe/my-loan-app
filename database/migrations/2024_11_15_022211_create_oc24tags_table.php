<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oc24tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->char('color', 6);
            $table->char('background', 6);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oc24tags');
    }
};
