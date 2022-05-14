<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Noticia;
use Illuminate\Support\Facades\Storage;

class EditNoticia extends Component
{
    use WithFileUploads;
    
    public $open=false;
    
    public $noticia, $image, $identificador;

    protected $rules = [
        'noticia.titulo_noticia' => 'required',
        'noticia.tipo_noticia' => 'required'
    ];

    public function mount(Noticia $noticia){
        $this->noticia = $noticia;
        $this->identificador = rand();
    }

    public function save(){
        $this->validate();
        
        if($this->image){
           Storage::delete($this->noticia->imagen);
           $this->noticia->imagen = $this->image->store('noticias');
        }

        $this->noticia->save();

         $this->reset(['open']);
     
        $this->emitTo('show-noticias','render');


        $this->emit('alert','La noticia se actualizó correctamente');
    }

   

    public function render()
    {
        return view('livewire.edit-noticia');
    }
}
