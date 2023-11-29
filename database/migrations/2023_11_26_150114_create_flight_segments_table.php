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
        Schema::create('flight_segments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('airplane_id');
            $table->string('flight_number', 10)->nullable();
            $table->string('departure_city', 255)->nullable();
            $table->string('arrival_city', 255)->nullable();
            $table->string('departure_airport', 255)->nullable();
            $table->string('arrival_airport', 255)->nullable();
            $table->date('departure_date')->nullable();
            $table->date('arrival_date')->nullable();
            $table->boolean('is_direct_flight');
            $table->string('connection_airport')->nullable();
            $table->bigInteger('connection_duration')->nullable();
            $table->string('airline', 255)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_segments');
    }
};
