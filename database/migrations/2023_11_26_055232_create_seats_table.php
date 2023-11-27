<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->integer('airplane_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('class_id')->nullable();
            $table->string('status')->nullable(); // Change the status column to string type
            $table->timestamps(); // Automatically creates created_at and updated_at columns
            $table->softDeletes(); // Automatically creates deleted_at column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
