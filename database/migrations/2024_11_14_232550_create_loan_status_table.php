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
        Schema::create('loan_status', function (Blueprint $table) {
            $table->id();
            $table->string('loan_id', 10);
            $table->string('national_id', 50);
            $table->string('collateral_status', 50);
            $table->enum('loan_status', ['Pending', 'Active', 'Rejected', 'Cleared', 'Defaulted']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_status');
    }
};
