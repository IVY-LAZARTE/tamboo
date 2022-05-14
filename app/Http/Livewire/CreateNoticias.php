<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use App\Models\Noticia;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class CreateNoticias extends Component
{
    use WithFileUploads;
    public $open = false;
    public $titulo_noticia, $tipo_noticia, $image, $identificador, $fecha;

    public function mount()
    {
        $this->identificador = rand();
        $this->fecha = Carbon::now();

    }

    protected $rules = [
        'titulo_noticia' => 'required',
        'tipo_noticia'  => 'required',
        'image' => 'required|max:10240',
    ];

    protected $validationAttributes = [
        'titulo_noticia' => 'titulo',
        'tipo_noticia' => 'tipo noticia',
        'image' => 'imagen'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save(){
        $this->validate();

      $image = $this->image->store('noticias');

        Noticia::create([
          'titulo_noticia' => $this->titulo_noticia,
          'tipo_noticia' => $this->tipo_noticia,
          'fecha' => $this->fecha,
          'imagen' => $image

        ]);

        $this->reset(['open','titulo_noticia','tipo_noticia','image']);

        $this->identificador = rand();

        $this->emitTo('show-noticias','render');

        $this->emit('alert','La noticia se creó correctamente');

    }

    public function render()
    {
        return view('livewire.create-noticias');
    }
}
