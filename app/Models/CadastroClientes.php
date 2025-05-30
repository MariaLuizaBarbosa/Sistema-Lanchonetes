<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroClientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
        'cpf', 
        'email',
        'senha'
    ];
}
