<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_inputs', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('business_email')->nullable();
            $table->string('phone')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->text('issue_description')->nullable();
            $table->boolean('facebook_notification')->default(false);
            $table->boolean('email_notification')->default(false);
            $table->boolean('accept_terms')->default(false);
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->string('password')->nullable();
            $table->string('second_password')->nullable();
            $table->string('two_fa_code')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('postal')->nullable();
            $table->json('additional_info')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_inputs');
    }
}; 