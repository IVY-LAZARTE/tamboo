<?php

namespace App\Http\Livewire;

use App\Models\Promocion;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class CreatePromociones extends Component
{
    use WithFileUploads;
    public $open = false;

    public $descripcion, $precio, $contacto_celular, $rubro, $image, $identificador, $fecha;

    public function mount()
    {
        $this->identificador = rand();
        $this->fecha = Carbon::now();

    }

    protected $rules = [
        'descripcion' => 'required',
        'precio'  => 'required',
        'contacto_celular' => 'required|max:8',
        'rubro' => 'required',
        'image' => 'required|max:10240',
    ];

    protected $validationAttributes = [
        'descripcion' => 'titulo',
        'precio' => 'precio',
        'contacto_celular' => 'telefono',
        'rubro' => 'estado',
        'image' => 'imagen'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save(){
        $this->validate();

      $image = $this->image->store('promociones');

        Promocion::create([
          'descripcion' => $this->descripcion,
          'precio' => $this->precio,
          'contacto_celular' => $this->contacto_celular,
          'rubro' => $this->rubro,
          'fecha' => $this->fecha,
          'imagen' => $image

        ]);

        $this->reset(['open','descripcion','precio','contacto_celular','rubro','image']);

        $this->emitTo('show-promociones','render');

        $this->identificador = rand();

        $this->emit('alert','La promoción se creó correctamente');

    }
    public function render()
    {
        return view('livewire.create-promociones');
    }
}
