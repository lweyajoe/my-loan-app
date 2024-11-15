<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('company_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name', 50)->nullable();
            $table->string('company_address', 50)->nullable();
            $table->string('company_email', 50)->nullable();
            $table->string('company_website', 50)->nullable();
            $table->string('company_phone', 20)->nullable();
            $table->decimal('tax_rate', 5, 2)->nullable();
            $table->decimal('interest_rate', 5, 2)->nullable();
            $table->string('interest_billing_period', 10)->nullable();
            $table->string('bank_name', 50)->nullable();
            $table->string('account_number', 50)->nullable();
            $table->string('account_reference', 50)->nullable();
            $table->string('payee_name', 50)->nullable();
            $table->decimal('processing_fees', 10, 2)->nullable();
            $table->decimal('insurance_fees', 4, 1)->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_settings');
    }
};
