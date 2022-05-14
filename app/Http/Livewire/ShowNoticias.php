<?php

namespace App\Http\Livewire;

use App\Models\Noticia;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ShowNoticias extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $search,$noticia,$image,$identificador;

    public function mount(){
        $this->identificador = rand();
        $this->noticia = new Noticia();
    }


    protected $listeners = ['render','delete'];

    public $open_edit = false;

    protected $rules = [
        'noticia.titulo_noticia' => 'required',
        'noticia.tipo_noticia' => 'required'
    ];


   
    public function render()
    {
        $noticias = Noticia::where('titulo_noticia', 'like', '%' . $this->search . '%')
                    ->paginate(10);
        return view('livewire.show-noticias',compact('noticias'))->layout('layouts.admin');
    }

    public function edit(Noticia $noticia){
     $this->noticia = $noticia;
     $this->open_edit = true;
    }

    public function update(){
        $this->validate();
        
        if($this->image){
           Storage::delete($this->noticia->imagen);
           $this->noticia->imagen = $this->image->store('noticias');
        }

        $this->noticia->save();

         $this->reset(['open_edit']);
     
        $this->emitTo('show-noticias','render');

        $this->emit('alert','La noticia se actualizó correctamente');
    }

    public function delete(Noticia $noticia){
        $noticia->delete();
    }
}
