<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('expected_payments', function (Blueprint $table) {
            $table->id();
            $table->string('loan_id', 10)->index(); // Added index for faster lookups
            $table->decimal('installment_amount', 10, 2)->nullable(false);
            $table->date('payment_date')->nullable(false);
            $table->enum('payment_status', ['paid', 'not paid'])->default('not paid');
            $table->decimal('interest_income', 10, 2)->default(0.00); // Default to avoid null
            $table->decimal('principal', 10, 2)->default(0.00); // Default to avoid null
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expected_payments');
    }
};
