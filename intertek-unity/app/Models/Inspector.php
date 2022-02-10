<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspector extends Model
{
    use HasFactory;

    protected $fillable = [

        'nome',
        'sobreNome',
        'DataNascimento',
        'emailIntertek',
        'disciplina',
        'qualificacoes',
        'rua',
        'bairro',
        'cpf',
        'telefone1',
        'telefone2',
        'cidade',
        'UF'

    ];
}
