<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();  // Cria o campo ID como chave primária
            $table->string('nome', 255);  // Cria o campo nome com tamanho máximo de 255 caracteres
            $table->string('contato', 9); // Cria o campo contato com 9 caracteres (número)
            $table->string('email')->unique();  // Cria o campo email e adiciona a restrição de valor único
            $table->timestamps();  // Cria os campos created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contatos');
    }
};
