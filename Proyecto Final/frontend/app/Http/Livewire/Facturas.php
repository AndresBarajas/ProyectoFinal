<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Facturas extends Component
{
    public $data = [];
    public $idFactura;
    public $listeners=['eliminar'];

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/facturas');
        $facturas = $response->json();
        return view('livewire.facturas',compact('facturas'));
    }
    public function save()
    {
       $response =  Http::withHeaders([
        'Accept'=>'Application/json'
       ])->post('http://127.0.0.1:8000/api/facturas', $this->data);
       if($response->successful())
       {
        return redirect('/facturas');
       }else{
            dd($response->json());
       }

    }

    public function confirmDelete($id){
        $this->idFactura = $id;
        $this->emit('delete','desea eliminar la factura seleccionado?');
    }
    public function eliminar(){
        Http::delete('http://127.0.0.1:8000/api/facturas/'. $this->idFactura);
    }

}
