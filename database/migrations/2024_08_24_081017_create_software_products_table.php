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
        Schema::create('software_products', function (Blueprint $table) {
            $table->id();
            $table->string('name_en'); // Name in English
            $table->string('name_ru')->nullable(); // Name in Russian
            $table->string('name_uz')->nullable(); // Name in Uzbek

            $table->text('description_en'); // Description in English
            $table->text('description_ru')->nullable(); // Description in Russian
            $table->text('description_uz')->nullable(); // Description in Uzbek

            $table->string('image')->nullable(); // Image of the software
            $table->text('video_url')->nullable(); // Video URL of the software
            $table->string('link')->nullable(); // Optional link for more information

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_products');
    }
};
