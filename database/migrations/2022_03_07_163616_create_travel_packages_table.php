<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();
            $table->string('nome_pacchetto', 100);
            $table->string('luogo_partenza', 100);
            $table->dateTime('partenza');
            $table->string('luogo_destinazione', 100);
            $table->integer('n_partecipanti_attuali');
            $table->float('costo');
            $table->text('descrizione', 255);
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
        Schema::dropIfExists('travel_packages');
    }
}
