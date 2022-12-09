<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ClientesEdit extends Component
{
    public $data=[];
    public $idCliente;


    public function mount($id)
    {
       $this->idCliente = $id;
       $this->data = Http::get('http://127.0.0.1:8000/api/clientes/'.  $this->idCliente)->json();

    }
    public function render()
    {
        return view('livewire.clientes-edit');
    }
    public function modify()
    {
        $response = Http::withHeaders(['Accept' => 'Application/json'])
        ->put('http://127.0.0.1:8000/api/clientes/'.$this->id, $this->data);
        if($response->successful()){
            $this->emit('success','Se modifico el usuario');
            return redirect('/clientes');
        }else{
            dd($response->json());
        }

    }
}
