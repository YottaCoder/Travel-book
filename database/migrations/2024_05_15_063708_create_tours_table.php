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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('Organization')->nullablle();
            $table->string('Tour name')->nullablle();
            $table->string('Destination From')->nullablle();
            $table->string('Destination To')->nullablle();
            $table->string('date')->nullablle();
            $table->string('Prize')->nullablle();
            $table->string('TourDay')->nullablle();
            $table->string('TourNights')->nullablle();
            $table->string('Meals')->nullablle();
            $table->string('Hotel')->nullablle();
            $table->string('Transfer')->nullablle();
            $table->string('TourPhoto')->nullablle();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
