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
        Schema::create('impressoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',50);
            $table->integer('matricula');
            $table->integer('quant_impress');
            $table->foreignId('id_setor_impress')->constrained('setor_impressoras');    
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
        Schema::dropIfExists('table_impressoes');
    }
};
