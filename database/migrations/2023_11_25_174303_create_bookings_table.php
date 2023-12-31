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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->nullable();
            $table->integer('flight_id')->nullable();
            $table->integer('flight_class_id')->nullable();
            $table->integer('flight_category_id')->nullable();
            $table->date('booking_date')->nullable();
            $table->integer('qty')->nullable();
            $table->decimal('amount',10,2)->nullable();
            $table->decimal('vat',10,2)->nullable();
            $table->decimal('total_amount',10,2)->nullable();
            $table->string('payment_status', 255)->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
