<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Detalles extends Component
{
    public $data = [];
    public $idDetalle;
    public $listeners=['eliminar'];

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/detalles');
        $detalles = $response->json();
        $reponse = Http::get('http://127.0.0.1:8000/api/facturas');
        $facturas = $response->json();
        return view('livewire.detalles',compact('detalles', 'facturas'));
    }
    public function save()
    {
       $response =  Http::withHeaders([
        'Accept'=>'Application/json'
       ])->post('http://127.0.0.1:8000/api/detalles', $this->data);
       if($response->successful())
       {
        return redirect('/detalles');
       }else{
            dd($response->json());
       }

    }
    public function confirmDelete($id){
        $this->idDetalle = $id;
        $this->emit('delete','desea eliminar el detalle seleccionado?');
    }

    public function eliminar(){
        Http::delete('http://127.0.0.1:8000/api/detalles/'. $this->idDetalle);
    }

}
