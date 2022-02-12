<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspectors', function (Blueprint $table) {

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('sobreNome', 100);
            

            $table->string('emailIntertek', 100)->unique();
            $table->string('disciplina', 100);
            $table->string('qualificacoes', 100);

            $table->string('rua', 100);

            $table->string('bairro', 100);
            $table->string('cpf', 20)->unique();
            $table->string('telefone1', 20)->unique();
            $table->string('telefone2', 20)->nullable();
            $table->string('cidade', 20);
            $table->char('UF', 2);

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
        Schema::dropIfExists('inspectors');
    }
}
