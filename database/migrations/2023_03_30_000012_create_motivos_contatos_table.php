<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('motivos_contatos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('motivos_contatos');
    }
};
