<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comprobante;
class EditComprobante extends Component
{
    public $open=false;
    public $comprobante,$image, $identificador;

  

    protected $rules = [
        'comprobante.contact' => 'required',
        'comprobante.phone' => 'required|max:8',
        
    ];

    public function mount(Comprobante $comprobante){
        $this->comprobante = $comprobante;
        $this->identificador = rand();
    }

    public function render()
    {
        return view('livewire.edit-comprobante');
    }
}
