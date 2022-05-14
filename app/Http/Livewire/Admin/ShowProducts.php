<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;


use Livewire\WithPagination;

class ShowProducts extends Component
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
         
        if ($category) {
            $products = Product::where('category', $category->name)
                  ->where('name', 'like', '%' . $this->search . '%')
                  ->paginate(10);

        return view('livewire.admin.show-products', compact('products','category'))->layout('layouts.admin');
        }
        else {
            $products = Product::where('name', 'like', '%' . $this->search . '%')
                  ->paginate(10);

        return view('livewire.admin.show-products', compact('products'))->layout('layouts.admin');
        }        
    }
}