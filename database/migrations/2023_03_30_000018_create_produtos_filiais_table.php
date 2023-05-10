<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produtos_filiais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('filial_id')->references('id')->on('filiais')->onDelete('cascade');
            $table->foreignId('produto_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos_filiais');
    }
};
