<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_voters', function (Blueprint $table) {

            # attribute voters
            $table->id('id_voters');
            $table->string('voters_name')->nullable();;
            $table->string('voters_country')->nullable();;
            $table->string('ip_address')->nullable();
            $table->string('mac_address')->nullable();
            $table->string('device_hash')->nullable();
            $table->boolean('has_voted')->default(false);

            # auth
            $table->string('email')->unique();
            $table->string('password');

            $table->string('otp_code')->nullable();
            $table->dateTime('otp_expired_at')->nullable();
            $table->dateTime('email_verified_at')->nullable();

            # soft delete
            $table->enum('status_data', ['Active', 'Not Active'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_voters');
    }
};
