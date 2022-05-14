<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Promocion;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ShowPromociones extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $search, $promocion,$image,$identificador;

    public function mount(){
        $this->identificador = rand();
        $this->promocion = new Promocion();
    }

    protected $listeners = ['render','delete'];

    public $open_edit = false;

    protected $rules = [
        'promocion.descripcion' => 'required',
        'promocion.precio' => 'required',
        'promocion.rubro' => 'required',
        'promocion.contacto_celular' => 'required'
    ];

    public function edit(Promocion $promocion){
        $this->promocion = $promocion;
        $this->open_edit = true;
       }

 public function update(){
    $this->validate();
        
    if($this->image){
       Storage::delete($this->promocion->imagen);
       $this->promocion->imagen = $this->image->store('promociones');
    }

    $this->promocion->save();

     $this->reset(['open_edit',]);

    $this->emit('alert','La promoción se actualizó correctamente');


 }


    public function render()
    {
        $promociones = Promocion::where('descripcion', 'like', '%' . $this->search . '%')
                    ->paginate(10);
        return view('livewire.show-promociones', compact('promociones'))->layout('layouts.admin');
    }

    public function delete(Promocion $promocion){
        $promocion->delete();
    }
}
