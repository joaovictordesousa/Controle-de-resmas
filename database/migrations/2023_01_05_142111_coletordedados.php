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
        Schema::create('coletordedados', function (Blueprint $table) {
            $table->foreignId('solicitacoes_id')->constrained('solicitacoes');
            $table->foreignId('impressoes_id')->constrained('impressoes');
            $table->foreignId('setor_id')->constrained('setores');
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
        Schema::dropIfExists('coletordedados');
    }
};
