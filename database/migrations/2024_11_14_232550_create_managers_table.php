<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->string('manager_id', 10)->primary();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('email', 255);
            $table->string('phone_number', 20);
            $table->string('county', 100);
            $table->string('town_centre', 100);
            $table->string('national_id', 20);
            $table->string('id_photo_front', 255);
            $table->string('id_photo_back', 255);
            $table->string('nssf', 20);
            $table->string('nhif', 20);
            $table->string('kra_pin', 20);
            $table->date('date_of_onboarding');
            $table->string('residence_nearest_building', 255);
            $table->string('residence_nearest_road', 255);
            $table->integer('age');
            $table->string('gender', 20)->nullable();
            $table->string('next_of_kin_name', 255);
            $table->string('next_of_kin_phone_number', 20);
            $table->string('next_of_kin_relation', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('managers');
    }
};
