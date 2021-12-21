<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kits', function (Blueprint $table) {
            $table->id();
            $table->string('sku', 16)->nullable();
            $table->string('modelo');
            $table->bigInteger('inversor');
            $table->bigInteger('painel');
            $table->string('margem', 8)->nullable();
            $table->float('potencia');
            $table->float('preco_cliente', 32)->nullable();
            $table->float('preco_fornecedor', 32);
            $table->boolean('status')->default(true);
            $table->boolean('status_fornecedor')->default(true);
            $table->integer('fornecedor');
            $table->string('tensao', 4);
            $table->integer('estrutura');
            $table->string('produtos', 1024);
            $table->string('complementos')->nullable();
            $table->string('observacoes')->nullable();
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
        Schema::dropIfExists('kits');
    }
}
