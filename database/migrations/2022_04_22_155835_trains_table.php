<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrainsTable extends Migration
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
            $table->string('azienda',100);
            $table->string('stazione_partenza',100);
            $table->string('stazione_arrivo',100);
            $table->time('ora_partenza');
            $table->time('ora_arrivo');
            $table->string('codice_treno');
            $table->smallinteger('carrozze')->unsigned(2);
            $table->tinyinteger('in_orario')->unsigned(1);
            $table->tinyinteger('cancellato')->unsigned(1);
            $table->timestamps();

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
