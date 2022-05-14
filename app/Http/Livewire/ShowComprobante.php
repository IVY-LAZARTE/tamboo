<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Comprobante;

use Livewire\WithPagination;

class ShowComprobante extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
          //hola mundo
          $category = Category::find(auth()->user()->id);
         
              $comprobantes = Comprobante::where('category', $category->name)
                    ->where('contact', 'like', '%' . $this->search . '%')
                    ->paginate(10);

          return view('livewire.show-comprobante', compact('comprobantes'))->layout('layouts.admin');
    }
}
