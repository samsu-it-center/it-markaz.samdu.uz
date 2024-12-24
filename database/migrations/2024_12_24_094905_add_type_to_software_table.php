<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeToSoftwareTable extends Migration
{
    public function up()
    {
        Schema::table('software_products', function (Blueprint $table) {
            $table->string('type')->nullable();
        });
    }

    public function down()
    {
        Schema::table('software_products', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
}
