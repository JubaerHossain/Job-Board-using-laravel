<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEmployeeTableWithCvData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees',function (Blueprint $table){
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('mobile')->nullable();
            $table->text('email')->nullable();
            $table->date('birthday')->nullable();
            $table->string('blood_group')->nullable();
            //$table->longText('address')->nullable();
            $table->text('objective')->nullable();
            $table->integer('current_income')->nullable();
            $table->integer('expected_income')->nullable();
            $table->text('current_company')->nullable();
            $table->integer('experience')->nullable();
            $table->text('job_location')->nullable();
            $table->longText('skills')->nullable();
            $table->longText('org_type')->nullable();
            $table->longText('top_skills')->nullable();
            $table->longText('skills_description')->nullable();
            $table->string('language')->nullable();
            $table->text('summary')->nullable();
            $table->text('duty')->nullable();
            $table->string('job_typ')->nullable();
            $table->string('curr_address')->nullable();
            $table->string('religion')->nullable();
            $table->string('nat_id')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('mother')->nullable();
            $table->string('father')->nullable();
            $table->boolean('locks')->default(1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
