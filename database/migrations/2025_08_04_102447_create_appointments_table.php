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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('appointment_number')->unique();
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_phone');
            $table->string('practice_area');
            $table->text('case_description');
            $table->date('preferred_date');
            $table->time('preferred_time');
            $table->enum('consultation_type', ['In-Person', 'Video Call', 'Phone Call']);
            $table->enum('status', ['Pending', 'Confirmed', 'Rejected', 'Completed', 'Cancelled'])->default('Pending');
            $table->text('admin_notes')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('rejected_at')->nullable();
            $table->string('confirmed_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
