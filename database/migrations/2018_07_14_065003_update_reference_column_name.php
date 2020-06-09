<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateReferenceColumnName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('references',function (Blueprint $table){
            $table->renameColumn('name','ref_name');
            $table->renameColumn('org_name','ref_org_name');
            $table->renameColumn('designation','ref_designation');
            $table->renameColumn('phone','ref_phone');
            $table->renameColumn('email','ref_email');


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
