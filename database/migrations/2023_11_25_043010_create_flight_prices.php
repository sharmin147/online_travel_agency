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
        Schema::create('flight_prices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('flight_category_id')->nullable();
            $table->bigInteger('flight_class_id')->nullable();
            $table->bigInteger('flight_route_id')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->bigInteger('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_classes');
    }
};
