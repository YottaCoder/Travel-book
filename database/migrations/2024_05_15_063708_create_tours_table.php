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
            $table->string('TourName')->nullablle();
            $table->string('DestinationFrom')->nullablle();
            $table->string('DestinationTo')->nullablle();
            $table->string('date')->nullablle();
            $table->string('Prize')->nullablle();
            $table->string('TourDay')->nullablle();
            $table->string('TourNights')->nullablle();
            $table->boolean('Meals')->default(false);
            $table->boolean('Hotel')->default(false);
            $table->boolean('Transfer')->default(false);
            $table->string('TourPhoto')->default('photo');
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
