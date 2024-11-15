<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oc24entrytypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('label', 255);
            $table->string('name', 255);
            $table->string('description', 255);
            $table->tinyInteger('base_type')->default(0);
            $table->tinyInteger('numbering')->default(1);
            $table->string('prefix', 255);
            $table->string('suffix', 255);
            $table->tinyInteger('zero_padding')->default(0);
            $table->tinyInteger('restriction_bankcash')->default(1);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oc24entrytypes');
    }
};
