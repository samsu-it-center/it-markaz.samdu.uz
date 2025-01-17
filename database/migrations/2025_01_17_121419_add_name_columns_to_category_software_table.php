<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameColumnsToCategorySoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_softwears', function (Blueprint $table) {
            $table->string('name_en')->nullable();
            $table->string('name_ru')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_softwears', function (Blueprint $table) {
            $table->dropColumn(['name_en', 'name_ru']);
        });
    }
}
