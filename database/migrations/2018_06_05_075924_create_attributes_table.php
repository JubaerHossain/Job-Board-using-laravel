<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->text('key_points');
            $table->longText('details');
            $table->longText('education_requirement');
            $table->text('year_of_experience')->nullable();
            $table->integer('year_of_experience_upper')->nullable();
            $table->integer('year_of_experience_lower')->nullable();
            $table->longText('experience_requirement');
            $table->string('vacancy');
            $table->text('gender_type');
            $table->longText('job_location');
            $table->longText('job_requirement');

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
        Schema::table('attributes',function (Blueprint $table){
            $table->dropForeign(['job_id']);
        });
        Schema::dropIfExists('attributes');
    }
}
