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
        Schema::create('normative_documents', function (Blueprint $table) {
            $table->id();
            $table->text('description_en');
            $table->text('description_ru')->nullable();
            $table->text('description_uz')->nullable();
            $table->timestamps();
        });

        Schema::create('normative_document_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('normative_document_id')->constrained()->onDelete('cascade');
            $table->string('file');
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('normative_document_files');
        Schema::dropIfExists('normative_documents');
    }
};
