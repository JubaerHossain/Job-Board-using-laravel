<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->text('inst1_name')->nullable();
            $table->text('inst1_degree')->nullable();
            $table->text('inst1_result')->nullable();
            $table->text('inst1_subject')->nullable();
            $table->text('inst1_duration')->nullable();
            $table->text('inst1_year')->nullable();
            $table->text('inst1_gpa')->nullable();

            $table->text('inst2_name')->nullable();
            $table->text('inst2_degree')->nullable();
            $table->text('inst2_result')->nullable();
            $table->text('inst2_subject')->nullable();
            $table->text('inst2_duration')->nullable();
            $table->text('inst2_year')->nullable();
            $table->text('inst2_gpa')->nullable();

            $table->text('inst3_name')->nullable();
            $table->text('inst3_degree')->nullable();
            $table->text('inst3_result')->nullable();
            $table->text('inst3_subject')->nullable();
            $table->text('inst3_duration')->nullable();
            $table->text('inst3_year')->nullable();
            $table->text('inst3_gpa')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
}
