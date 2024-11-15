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
        Schema::create('loan_info', function (Blueprint $table) {
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
            $table->string('collateral_pic1');
            $table->string('collateral_pic2');
            $table->string('guarantor1_name', 100)->nullable();
            $table->string('guarantor1_phone', 20)->nullable();
            $table->string('guarantor2_name', 100)->nullable();
            $table->string('guarantor2_phone', 20)->nullable();
            $table->string('signed_application_form');
            $table->enum('loan_status', ['Pending', 'Active', 'Rejected', 'Cleared', 'Defaulted'])->default('Active');
            $table->string('onboarding_officer', 100);
            $table->timestamps();
            $table->timestamp('status_change')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_info');
    }
};
