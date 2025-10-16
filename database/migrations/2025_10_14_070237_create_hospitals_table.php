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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // From form
            $table->string('facility_name');
            $table->string('phone');
            $table->string('registration_number')->unique();
            $table->enum('institution_type', ['hospital', 'clinic', 'laboratory', 'diagnostic_center', 'other']);
            $table->integer('capacity')->default(0); // Number of beds/capacity from form
            $table->text('address');
            $table->string('contact_person'); // Administrator/Contact person from form
            
            // Additional fields
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->default('Nigeria');
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->string('contact_person_phone');
            $table->string('contact_person_email')->nullable();
            $table->integer('number_of_doctors')->default(0);
            $table->json('facilities_available')->nullable();
            $table->text('description')->nullable();
            $table->string('logo_path')->nullable();
            $table->boolean('is_approved')->default(false);
            
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
        Schema::dropIfExists('hospitals');
    }
};
