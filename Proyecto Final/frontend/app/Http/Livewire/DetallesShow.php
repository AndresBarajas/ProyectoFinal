<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class DetallesShow extends Component
{
    public $idDetalle;
    public function mount($id)
    {
        $this->idDetalle = $id;
    }

    public function render()
    {
        $detalle = Http::get('http://127.0.0.1:8000/api/detalles/'.$this->idDetalle)->json();
        return view('livewire.detalles-show',compact('detalle'));
    }
}
