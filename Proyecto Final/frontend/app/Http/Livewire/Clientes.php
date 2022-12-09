<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Clientes extends Component
{
    public $data = [];
    public $idCliente;
    public $listeners=['eliminar'];

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/clientes');
        $clientes = $response->json();
        //dd($clientes);
        return view('livewire.clientes',compact('clientes'));
    }

    public function save()
    {
       $response =  Http::withHeaders([
        'Accept'=>'Application/json'
       ])->post('http://127.0.0.1:8000/api/clientes', $this->data);
       if($response->successful())
       {
        return redirect('/clientes');
       }else{
            dd($response->json());
       }
    }

    public function confirmDelete($id){
        $this->idCliente = $id;
        $this->emit('delete','desea eliminar el usuario seleccionado?');
    }

    public function eliminar(){
        Http::delete('http://127.0.0.1:8000/api/clientes/'. $this->idCliente);
    }

}
