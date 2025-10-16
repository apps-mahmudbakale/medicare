<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            
            // From form
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->text('address');
            
            // Emergency Contact (from form)
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            
            // Additional medical information
            $table->string('blood_group')->nullable();
            $table->string('blood_genotype')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('occupation')->nullable();
            $table->string('nationality')->default('Nigerian');
            $table->string('state_of_origin')->nullable();
            $table->string('lga')->nullable();
            $table->string('religion')->nullable();
            
            // Contact Information
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->default('Nigeria');
            
            // Medical Information
            $table->text('known_allergies')->nullable();
            $table->text('medical_history')->nullable();
            $table->string('nhis_number')->nullable();
            $table->string('hmo_information')->nullable();
            
            // Additional Information
            $table->string('profile_photo_path')->nullable();
            $table->boolean('is_active')->default(true);
            
            // Audit fields
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
