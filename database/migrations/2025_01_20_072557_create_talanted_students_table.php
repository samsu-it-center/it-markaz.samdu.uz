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
        Schema::create('talanted_students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->text('info_en');
            $table->text('info_ru')->nullable();
            $table->text('info_uz')->nullable();
            $table->string('image')->nullable();
            $table->integer('type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talante_students');
    }
};
