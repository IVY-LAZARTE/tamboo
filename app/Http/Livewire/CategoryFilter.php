<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithPagination;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;

class CategoryFilter extends Component
{
    use WithPagination;

    public $category, $subcategoria;

    public $view = "grid";


    protected $queryString = ['subcategoria'];

    public function limpiar(){
        $this->reset(['subcategoria', 'page']);
    }


    public function updatedSubcategoria(){
        $this->resetPage();
    }

    

    public function render()
    {

        /* $products = $this->category->products()
                            ->where('status', 2)->paginate(20); */

        $productsQuery = Product::query()->whereHas('subcategory.category', function(Builder $query){
            $query->where('id', $this->category->id);
        });

        if ($this->subcategoria) {
            $productsQuery = $productsQuery->whereHas('subcategory', function(Builder $query){
                $query->where('slug', $this->subcategoria);
            });
        }

        

        $products = $productsQuery->paginate(20);

        return view('livewire.category-filter', compact('products'));
    }
}
