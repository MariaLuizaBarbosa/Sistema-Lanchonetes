<?php

namespace App\Livewire\Clientes;

use App\Models\CadastroClientes;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{

    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

    public function render()
    {
        return view('livewire.clientes.create');
    }

    public function store(){
        CadastroClientes::create([
            'nome' => $this->nome,                                 
            'endereco' => $this->endereco,                             
            'telefone' => $this->telefone,                               
            'cpf' => $this->cpf, 
            'email' => $this->email, 
            'senha' => $this->senha
        ]);
        session()->flash('success', 'Cadastro Realizado');
    }

}
