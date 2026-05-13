<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_participants', function (Blueprint $table) {

            # ...
            $table->id('id_participants');
            $table->string('team_name')->nullable();
            $table->string('participants_name_1')->nullable();
            $table->string('participants_name_2')->nullable();
            $table->string('participants_name_3')->nullable();
            $table->string('participants_name_4')->nullable();
            $table->string('participants_name_5')->nullable();
            $table->string('participants_country')->nullable();
            $table->string('participants_phone')->nullable();

            # status participants
            $table->enum('status_registration', ['Pending', 'Rejected', 'Verified'])->default('Pending');
            $table->enum('status_urban_design', ['Not Submitted', 'Submitted'])->default('Not Submitted');

            # status urban design
            $table->enum('status_assessment_one', ['Approved', 'Pending', 'Rejected'])->default('Pending');
            $table->enum('status_assessment_two', ['Approved', 'Pending', 'Rejected'])->default('Pending');
            $table->enum('status_final_assessment', ['Approved', 'Pending', 'Rejected'])->default('Pending');

            # Proses Auth
            $table->string('email')->unique();
            $table->string('password');

            # soft delete
            $table->enum('status_data', ['Active', 'Not Active'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_participants');
    }
};
