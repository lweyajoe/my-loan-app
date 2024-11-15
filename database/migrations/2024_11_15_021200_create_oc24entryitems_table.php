<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oc24entryitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('entry_id');
            $table->unsignedBigInteger('ledger_id');
            $table->decimal('amount', 25, 2)->default(0.00);
            $table->char('dc', 1);
            $table->date('reconciliation_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oc24entryitems');
    }
};
