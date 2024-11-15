<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mpesa_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id', 50)->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('mpesa_receipt_number', 20)->nullable();
            $table->timestamp('transaction_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('status', ['Completed', 'Failed'])->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mpesa_transactions');
    }
};
