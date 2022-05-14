<?php

namespace App\Http\Livewire;

use App\Models\Comprobante;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

use Livewire\WithFileUploads;


class CreateComprobante extends Component
{
    use WithFileUploads;
    public $open = false;

    public $contact, $phone, $image, $identificador;

    public function mount()
    {
        $this->identificador = rand();
    }

    protected $rules = [
        'contact' => 'required',
        'phone' => 'required|max:8',
        'image' => 'required|max:10240',
    ];

    protected $validationAttributes = [
        'contact' => 'nombre del comprador',
        'phone' => 'número de telefono',
        'image' => 'imagen'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save(){
        $this->validate();

      $image = $this->image->store('promociones');

        Comprobante::create([
          'contact' => $this->contact,
          'category' => 'Lacteos Lajeñita',
          'phone' => $this->phone,
          'image' => $image

        ]);

        $this->reset(['open','contact','phone','image']);

        $this->identificador = rand();

        $this->emit('alert','El comprobante se envió correctamente');

    }


    public function render()
    {
        return view('livewire.create-comprobante');
    }
}
