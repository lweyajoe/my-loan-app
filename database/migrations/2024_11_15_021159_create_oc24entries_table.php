<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oc24entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->unsignedBigInteger('entrytype_id');
            $table->unsignedBigInteger('number')->nullable();
            $table->date('date');
            $table->decimal('dr_total', 25, 2)->default(0.00);
            $table->decimal('cr_total', 25, 2)->default(0.00);
            $table->string('narration', 500);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oc24entries');
    }
};
