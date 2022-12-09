<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class FacturasEdit extends Component

{
    public $data=[];
    public $idFactura;

    public function mount($id)
    {
       $this->idFactura = $id;
       $this->data = Http::get('http://127.0.0.1:8000/api/facturas/'.  $this->idFactura)->json();

    }

    public function render()
    {
        return view('livewire.facturas-edit');
    }

    public function modify()
    {
        $response = Http::withHeaders(['Accept' => 'Application/json'])
        ->put('http://127.0.0.1:8000/api/facturas/'.$this->id, $this->data);
        if($response->successful()){
            $this->emit('success','Se modifico la factura');
            return redirect('/facturas');
        }else{
            dd($response->json());
        }

    }
}
