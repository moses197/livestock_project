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
        Schema::create('veterinary_visits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')->references('id')->on('animals');
            $table->date('visit_date');
            $table->text('diagnosis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veterinary_visits');
    }
};
