<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fornecedor_id')->references('id')->on('fornecedores')->onDelete('cascade')->unique();
            $table->string('nome');
            $table->text('descricao');
            $table->text('peso');
            $table->foreignId('unidade_medida_id')->references('id')->on('unidades_medida')->onDelete('cascade')->unique();
            $table->decimal('preco_venda', 8, 2);

            // $table->integer('estoque_minimo');
            // $table->integer('estoque_maximo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
