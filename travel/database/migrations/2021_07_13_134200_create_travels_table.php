<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->smallInteger('persone');
            $table->text('itinerario')->nullable();
            $table->smallInteger('giorni');
            $table->string('partenza', 50)->nullable();
            $table->string('arrivo', 50)->nullable();
            $table->string('poster', 200)->nullable();
            $table->integer('prezzo')->nullable();
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
        Schema::dropIfExists('_travels');
    }
}
