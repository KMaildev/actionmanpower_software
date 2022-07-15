<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPersonInfoToPassportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('passports', function (Blueprint $table) {
            $table->text('labour_card_no')->nullable();
            $table->text('issue_labour_date')->nullable();
            $table->text('qualification')->nullable();
            $table->text('job')->nullable();
            $table->text('identification_card')->nullable();
            $table->text('issue_date_id_card')->nullable();
            $table->text('salary')->nullable();
            $table->text('vaccine_name')->nullable();
            $table->text('covid_number')->nullable();
            $table->text('contact_person')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('relative')->nullable();
            $table->text('local_agent_phone')->nullable();
            $table->text('local_agent_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('passports', function (Blueprint $table) {
            //
        });
    }
}
