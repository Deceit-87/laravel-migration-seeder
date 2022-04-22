<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Trains', function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('azienda',12);
            $table->string('stazione_partenza',100);
            $table->string('stazione_arrivo',100);
            $table->string('ora_partenza',100);
            $table->string('ora_arrivo',50);
            $table->smallinteger('codice_treno')->unsigned();
            $table->smallinteger('carrozze')->unsigned();
            $table->tinyinteger('in_orario')->unsigned();
            $table->tinyinteger('cancellato')->unsigned();

        });
        //
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
