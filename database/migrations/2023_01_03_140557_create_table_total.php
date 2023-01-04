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
        Schema::create('total', function (Blueprint $table) {
            $table->foreignId('solicitacoes')->constrained('solicitacoes');
            $table->foreignId('id_quant_impress')->constrained('impressoes');
            $table->foreignId('setor')->constrained('setores');
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
        Schema::dropIfExists('table_total');
    }
};
