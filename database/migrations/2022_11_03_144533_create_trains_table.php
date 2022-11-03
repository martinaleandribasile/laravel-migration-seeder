<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 200);
            $table->date('data_partenza');
            $table->string('stazione_partenza', 200);
            $table->string('stazione_arrivo', 200);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno', 10);
            $table->tinyInteger('numero_carrozze');
            $table->boolean('treno_in_orario');
            $table->boolean('treno_cancellato');
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
        Schema::dropIfExists('trains');
    }
}
