<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->date('data_nascimento');
            $table->string('item');
            $table->string('descricao');
            $table->string('quantidade');
            $table->string('estoque_minimo');
            $table->string('valor_unitario');
            $table->string('data_compra');
            $table->string('observacao');
            $table->string('grupo');
            $table->string('');
            $table->timestamps();
        });

    }
   
    public function down()
    {
        Schema::drop('produto');
    }
}
