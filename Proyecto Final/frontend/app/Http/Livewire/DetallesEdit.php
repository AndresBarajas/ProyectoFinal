<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class DetallesEdit extends Component
{
    public $data=[];
    public $idDetalle;


    public function mount($id)
    {
       $this->idDetalle = $id;
       $this->data = Http::get('http://127.0.0.1:8000/api/detalles/'.  $this->idDetalle)->json();

    }

    public function render()
    {
        return view('livewire.detalles-edit');
    }
    public function modify()
    {
        $response = Http::withHeaders(['Accept' => 'Application/json'])
        ->put('http://127.0.0.1:8000/api/detalles/'.$this->id, $this->data);
        if($response->successful()){
            $this->emit('success','Se modifico el detalle');
            return redirect('/detalles');
        }else{
            dd($response->json());
        }

    }
}
