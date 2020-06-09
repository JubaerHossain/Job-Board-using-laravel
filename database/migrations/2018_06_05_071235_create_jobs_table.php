<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
            $table->string('title');
            $table->string('company_name');
            $table->integer('salary_upper')->nullable();
            $table->integer('salary_lower')->nullable();
            $table->string('salary_type')->nullable();
            $table->string('organization_type')->nullable();
            $table->integer('min_experience')->nullable();
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->text('street_location');
            $table->string('type');
            $table->date('deadline');
            $table->boolean('status')->default(0);
            $table->string('publish_status');
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
        Schema::table('jobs',function (Blueprint $table){
            $table->dropForeign(['category_id','subcategory_id']);
        });
        Schema::dropIfExists('jobs');
    }
}
