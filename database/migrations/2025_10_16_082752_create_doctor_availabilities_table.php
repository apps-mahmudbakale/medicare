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
        Schema::create('doctor_availabilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
            
            // Day of the week (0=Sunday, 6=Saturday or use string names)
            $table->enum('day_of_week', ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday']);
            
            // Working hours
            $table->time('start_time');
            $table->time('end_time');
            
            // Break time (optional)
            $table->time('break_start')->nullable();
            $table->time('break_end')->nullable();
            
            // Status flags
            $table->boolean('is_working_day')->default(true);
            $table->boolean('is_available')->default(true);
            
            // Recurring or specific date
            $table->boolean('is_recurring')->default(true);
            $table->date('specific_date')->nullable();
            
            // Notes for any special conditions
            $table->text('notes')->nullable();
            
            $table->timestamps();
            
            // Ensure a doctor can't have duplicate entries for the same day
            $table->unique(['doctor_id', 'day_of_week', 'specific_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_availabilities');
    }
};
