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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('contact_it_center_en');
            $table->string('contact_it_center_ru');
            $table->string('contact_it_center_uz');
            $table->text('about_center_en');
            $table->text('about_center_ru');
            $table->text('about_center_uz');
            $table->string('official_name_en');
            $table->string('official_name_ru');
            $table->string('official_name_uz');
            $table->string('location_en');
            $table->string('location_ru');
            $table->string('location_uz');
            $table->text('address_en');
            $table->text('address_ru');
            $table->text('address_uz');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
