<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ClientesShow extends Component
{
    public $idCliente;
    public function mount($id)
    {
        $this->idCliente = $id;

    }
    public function render()
    {
        $cliente = Http::get('http://127.0.0.1:8000/api/clientes/'.$this->idCliente)->json();
        return view('livewire.clientes-show', compact('cliente'));
    }
}
