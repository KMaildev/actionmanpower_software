<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPersonFieldsToOverseasAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('overseas_agencies', function (Blueprint $table) {
            $table->text('website')->nullable();
            $table->text('position')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('remark')->nullable();
            $table->text('logo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('overseas_agencies', function (Blueprint $table) {
            //
        });
    }
}
