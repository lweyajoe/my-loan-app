<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oc24ledgers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('group_id');
            $table->string('name', 255);
            $table->string('code', 255)->nullable();
            $table->decimal('op_balance', 25, 2)->default(0.00);
            $table->char('op_balance_dc', 1);
            $table->tinyInteger('type')->default(0);
            $table->boolean('reconciliation')->default(false);
            $table->string('notes', 500);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oc24ledgers');
    }
};
