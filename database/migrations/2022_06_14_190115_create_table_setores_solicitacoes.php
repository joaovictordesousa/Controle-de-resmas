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
        Schema::create('setores_solicitacoes', function (Blueprint $table) {
            $table->foreignId('id_setor')->constrained('setores', 'id');
            $table->foreignId('id_solicitacoes')->constrained('solicitacoes', 'id');
            $table->primary(['id_setor', 'id_solicitacoes']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setores_solicitacoes');
    }
};
