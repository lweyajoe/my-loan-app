<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rejected_loans', function (Blueprint $table) {
            $table->string('loan_id', 10)->primary();
            $table->string('client_id', 10);
            $table->string('national_id', 20);
            $table->decimal('requested_amount', 10, 2);
            $table->text('loan_purpose');
            $table->integer('duration');
            $table->enum('duration_period', ['Week', 'Month', 'Year']);
            $table->date('date_applied');
            $table->string('collateral_name', 100);
            $table->decimal('collateral_value', 10, 2);
            $table->string('collateral_pic1', 255);
            $table->string('collateral_pic2', 255);
            $table->string('guarantor1_name', 100);
            $table->string('guarantor1_phone', 20);
            $table->string('guarantor2_name', 100);
            $table->string('guarantor2_phone', 20);
            $table->enum('loan_status', ['Pending', 'Active', 'Rejected', 'Cleared', 'Defaulted'])->default('Rejected');
            $table->string('onboarding_officer', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rejected_loans');
    }
};
