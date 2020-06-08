<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenants', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('app_nom');
            $table->string('app_prenom');
            $table->string('app_age');
            $table->string('app_formation');
            $table->string('app_durre_form');
            $table->string('app_lien_projet');
            $table->string('app_status');
            $table->string('app_travail');
            $table->string('app_image');
            
            
            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenants');
    }
}
