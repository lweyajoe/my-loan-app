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
        Schema::create('loan_stage', function (Blueprint $table) {
            $table->string('loan_id', 10)->primary();
            $table->enum('stage', [
                'Green Zone',
                'Early Delinquency',
                'Loan Loss Provision Recognised',
                'Loan Loss Provision Unrecognised',
                'Default Unrecognised',
                'Default Recognised'
            ])->default('Green Zone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_stage');
    }
};
