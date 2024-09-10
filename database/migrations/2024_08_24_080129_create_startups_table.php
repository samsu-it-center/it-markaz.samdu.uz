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
        Schema::create('startups', function (Blueprint $table) {
            $table->id();

            $table->text('title_en')->nullable();
            $table->text('title_uz')->nullable();
            $table->text('title_ru')->nullable();

            $table->text('description_en');
            $table->text('description_ru');
            $table->text('description_uz');

            $table->text('project_objective_en');
            $table->text('project_objective_ru');
            $table->text('project_objective_uz');

            $table->text('opportunities_tasks_en');
            $table->text('opportunities_tasks_ru');
            $table->text('opportunities_tasks_uz');

            $table->text('budget_en');
            $table->text('budget_ru');
            $table->text('budget_uz');

            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('startups');
    }
};
