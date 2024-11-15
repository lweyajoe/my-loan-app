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
        Schema::create('clients', function (Blueprint $table) {
            $table->string('client_id', 10)->primary();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 100);
            $table->string('phone_number', 20);
            $table->string('county', 50);
            $table->string('town_centre', 100);
            $table->string('national_id', 20);
            $table->string('id_photo_front', 255);
            $table->string('id_photo_back', 255);
            $table->string('work_economic_activity', 100);
            $table->string('residence_nearest_building', 100);
            $table->string('residence_nearest_road', 100);
            $table->date('date_of_onboarding');
            $table->string('onboarding_officer', 100);
            $table->integer('age')->nullable();
            $table->string('gender', 20)->nullable();
            $table->string('next_of_kin_name', 100)->nullable();
            $table->string('next_of_kin_phone_number', 20)->nullable();
            $table->string('next_of_kin_relation', 100)->nullable();
            $table->string('next_of_kin_residence', 100)->nullable();
            $table->string('guarantor_national_id', 20)->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
