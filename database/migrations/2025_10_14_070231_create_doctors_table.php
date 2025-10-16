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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // From form
            $table->string('license_number')->unique();
            $table->string('specialization');
            $table->integer('experience_years')->default(0);
            $table->string('affiliation')->nullable(); // Hospital/Clinic affiliation
            $table->text('address');
            
            // Additional fields
            $table->text('qualifications')->nullable();
            $table->decimal('consultation_fee', 10, 2)->default(0);
            $table->text('bio')->nullable();
            $table->string('phone');
            $table->string('profile_photo_path')->nullable();
            $table->boolean('is_available')->default(true);
            
            // Audit fields
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
