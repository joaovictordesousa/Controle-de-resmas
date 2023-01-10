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
        Schema::create('setores_impressoras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_setor')->references('id')->on('setores')
            ->onDelete('cascade');
            $table->foreignId('id_impressora')->references('id')->on('impressoras')
            ->onDelete('cascade');
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
        Schema::dropIfExists('setores_impressoras');
    }
};
