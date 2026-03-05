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
        Schema::create('uraf_requests', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('gender', 20)->nullable();
            $table->string('passport_no')->nullable();
            $table->string('other_id_no')->nullable()->comment('e.g. iqama no, saudi residence id');
            $table->string('e_mail_or_facebook_name')->nullable()->comment('e-mail or facebook name');
            $table->string('occupation')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('location_abroad')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('employer_phone_no')->nullable();
            $table->string('recruitment_agency_name_abroad')->nullable();
            $table->string('recruitment_agency_name_local')->nullable();
            $table->text('complaint')->nullable();
            $table->decimal('location_lat', 10, 8)->nullable();
            $table->decimal('location_lng', 11, 8)->nullable();
            $table->string('upload_1')->nullable();
            $table->string('upload_2')->nullable();
            $table->string('upload_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uraf_requests');
    }
};
