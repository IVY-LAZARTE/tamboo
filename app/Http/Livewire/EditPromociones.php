<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Promocion;
use Illuminate\Support\Facades\Storage;

class EditPromociones extends Component
{
    use WithFileUploads;
    
    public $open=false;
    
    public $promocion, $image, $identificador;

    protected $rules = [
        'promocion.descripcion' => 'required',
        'promocion.precio' => 'required',
        'promocion.rubro' => 'required',
        'promocion.contacto_celular' => 'required'
    ];

    public function mount(Promocion $promocion){
        $this->promocion = $promocion;
        $this->identificador = rand();
    }

    public function save(){
        $this->validate();
        
        if($this->image){
           Storage::delete($this->promocion->imagen);
           $this->promocion->imagen = $this->image->store('promociones');
        }

        $this->promocion->save();

         $this->reset(['open']);
     
        $this->emitTo('show-promociones','render');


        $this->emit('alert','La promoción se actualizó correctamente');
    }

    public function render()
    {
        return view('livewire.edit-promociones');
    }
}
