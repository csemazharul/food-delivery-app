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
        Schema::create('riders_locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rider_id');
            $table->string('service_name');
            $table->double('lat');
            $table->double('long');
            $table->timestamp('capture_time')->default(now());
            $table->foreign('rider_id')->references('id')->on('riders')->onDelete('cascade');
            $table->foreign('app_id')->references('id')->on('food_apps')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riders_locations');
    }
};
