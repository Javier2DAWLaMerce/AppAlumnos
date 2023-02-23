<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnes', function (Blueprint $table) {
            $table->id();

            $table->string('nom', 20);
            $table->string('apellido1', 20);
            $table->string('apellido2', 20);
            $table->integer('edad');
            $table->string('adreça', 100);
            $table->string('telefon');
            $table->string('dni',9)->unique();//Esto indica que no se podrá repetir.

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
        Schema::dropIfExists('alumnes');
    }
};
