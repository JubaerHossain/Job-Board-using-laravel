<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCompayTableAddedContactPersonColumnsWithAttributeChange extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies',function (Blueprint $table){
            $table->longText('company_person');
            $table->string('person_contact',25);
            $table->text('person_designation');

            $table->longText('description')->nullable()->change();
            $table->longText('address')->nullable()->change();
            $table->longText('about')->nullable()->change();
            $table->text('video')->nullable()->change();
            $table->text('facebook')->nullable()->change();
            $table->text('twitter')->nullable()->change();
            $table->text('linkedin')->nullable()->change();
            $table->text('location')->nullable()->change();
            $table->text('image')->nullable()->change();
            $table->text('website')->nullable()->change();
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
