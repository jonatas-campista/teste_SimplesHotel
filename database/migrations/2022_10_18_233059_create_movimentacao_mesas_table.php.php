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
        Schema::create('movimentacao_mesas', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade')->unsigned();
            $table->decimal(15,2);
            $table->foreignId('movimentacao_id_mesa')->references('id')->on('mesas');
            $table->foreignId('movimentacao_id_produto')->references('id')->on('produtos');
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
        Schema::dropIfExists('movimentacao_mesas');
    }
};
