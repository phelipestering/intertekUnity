<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspector extends Model
{
    use HasFactory;

    

    protected $table= "inspectors";

    protected $fillable = [

        'name',
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

    public function search($filter = null)
    {
        $results = $this->where('name', 'LIKE', "%${filter}%")
                        ->orWhere('UF', 'LIKE', "%{$filter}%")
                        ->orWhere('cidade', 'LIKE', "%{$filter}%")
                        ->orWhere('disciplina', 'LIKE', "%{$filter}%")
                        ->orWhere('qualificacoes', 'LIKE', "%{$filter}%")
                        ->paginate();

                        return $results;
    }

}
