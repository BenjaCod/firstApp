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
        Schema::create('companies_info', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('company_name')->unique();
            $table->string('company_followers')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_headline')->nullable();
            $table->string('company_short_description')->nullable();
            $table->string('company_fb_link')->nullable();
            $table->string('company_insta_link')->nullable();
            $table->string('company_linkedin_link')->nullable();
            $table->string('company_long_desc_name')->nullable();
            $table->longText('company_long_desc')->nullable();
            $table->string('company_requisites_name')->nullable();
            $table->string('company_requisites_desc')->nullable();
            $table->string('company_code')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_iv_desc')->nullable();
            $table->json('company_photos')->nullable();
            $table->string('company_main_photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies_info');
    }
};
