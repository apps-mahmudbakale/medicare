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
            $table->string('email')->unique();
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
