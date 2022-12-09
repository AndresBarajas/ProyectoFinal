<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class FacturasShow extends Component
{
    public $idFactura;
    public function mount($id)
    {
        $this->idFactura = $id;

    }

    public function render()

    {
        $factura = Http::get('http://127.0.0.1:8000/api/facturas/'.$this->idFactura)->json();
        return view('livewire.facturas-show', compact('factura'));
    }
}
