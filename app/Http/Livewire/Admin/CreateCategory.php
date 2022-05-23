<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

use Illuminate\Support\Str;

use Livewire\WithFileUploads;

class CreateCategory extends Component
{

    use WithFileUploads;

    public $categories,$subcategory, $users, $category, $rand;

    protected $listeners = ['delete'];

    public $createForm = [
        
        'name' => null,
        'slug' => null,
        'responsable' => null,
        'icon' => null,
        'numero_contacto' => null,
        'numero_cuenta' => null,
        'user_id' => null,
        'image' => null,
    ];

    public $editForm = [
        'open' => false,
        'name' => null,
        'slug' => null,
        'responsable' => null,
        'icon' => null,
        'numero_contacto' => null,
        'numero_cuenta' => null,
        'image' => null,
    ];

    public $editImage;

    protected $rules = [
        'createForm.name' => 'required',
        'createForm.responsable' => 'required',
        'createForm.slug' => 'required|unique:categories,slug',
        'createForm.numero_contacto' => 'required|max:8',
        'createForm.numero_cuenta' => 'required|max:15',
        'createForm.user_id' => 'required',
        'createForm.image' => 'required|image|max:7168',
    ];

    protected $validationAttributes = [
        'createForm.name' => 'nombre',
        'createForm.slug' => 'slug',
         'createForm.responsable' => 'responsable',
        'createForm.numero_contacto' => 'numero contacto',
        'createForm.numero_cuenta' => 'numero cuenta',
        'createForm.user_id' => 'usuario de la empresa',
        'createForm.image' => 'imagen',
        'editForm.name' => 'nombre',
        'editForm.slug' => 'slug',
        'editForm.responsable' => 'responsable',
        'editForm.numero_contacto' => 'número contacto',
        'editForm.numero_cuenta' => 'número cuenta',
        'editForm.user_id' => 'usuario de la empresa',
        'editImage' => 'imagen',
        
    ];

    public function mount(){
        $this->getCategories();
        $this->getSubCategory();
        $this->getUsers();
        $this->rand = rand();
    }

    public function updatedCreateFormName($value){
        $this->createForm['slug'] = Str::slug($value);
    }

    public function updatedEditFormName($value){
        $this->editForm['slug'] = Str::slug($value);
    }

    public function getCategories(){
        $this->categories = Category::all();
    }
    
    public function getSubcategory(){
        $this->subcategory = Subcategory::all();
    }

    public function getUsers(){
        $this->users = User::all();
    }

    public function save(){
        $this->validate();

        $image = $this->createForm['image']->store('categories');

        $category = Category::create([
            'id' => $this->createForm['user_id'],
            'name' => $this->createForm['name'],
            'slug' => $this->createForm['slug'],
            'responsable' => $this->createForm['responsable'],
            'icon' => $this->createForm['icon'],
            'numero_contacto' => $this->createForm['numero_contacto'],
            'numero_cuenta' => $this->createForm['numero_cuenta'],
            'user_id' => $this->createForm['user_id'],
            'image' => $image
        ]);

       $subcategory = Subcategory::create([
        'name' => 'queso',
        'slug' => 'queso',
        'category_id' => $category->id,
       ]);

       $subcategory= Subcategory::create([
        'name' => 'leche',
        'slug' => 'leche',
        'category_id' => $category->id,
       ]);

       $subcategory = Subcategory::create([
        'name' => 'yogurt',
        'slug' => 'yogurt',
        'category_id' => $category->id,
       ]);

       $subcategory =Subcategory::create([
        'name' => 'mantequilla',
        'slug' => 'mantequilla',
        'category_id' => $category->id,
       ]);

        $this->rand = rand();
        $this->reset('createForm');

        $this->getCategories();
        $this->emit('saved');


    }

    public function edit(Category $category){

        $this->reset(['editImage']);
        $this->resetValidation();

        $this->category = $category;

        $this->editForm['open'] = true;
        $this->editForm['name'] = $category->name;
        $this->editForm['responsable'] = $category->responsable;
        $this->editForm['slug'] = $category->slug;
        $this->editForm['numero_contacto'] = $category->numero_contacto;
        $this->editForm['numero_cuenta'] = $category->numero_cuenta;
        $this->editForm['user_id'] = $category->user_id;
        $this->editForm['image'] = $category->image;
    }

    public function update(){

        $rules = [
            'editForm.name' => 'required',
            'editForm.slug' => 'required|unique:categories,slug,' . $this->category->id,
            'editForm.responsable' => 'required',
            'editForm.numero_contacto' => 'required',
            'editForm.numero_cuenta' => 'required',
            'editForm.user_id' => 'required',
            
        ];

        if ($this->editImage) {
            $rules['editImage'] = 'required|image|max:7168';
        }

        $this->validate($rules);

        if ($this->editImage) {
            Storage::delete($this->editForm['image']);
            $this->editForm['image'] = $this->editImage->store('categories');
        }

        $this->category->update($this->editForm);

        $this->reset(['editForm', 'editImage']);

        $this->getCategories();
    }

    public function delete(Category $category){
        $user = User::find($category->user_id);
        $user->removeRole('productor');
        $category->delete();
        $this->getCategories();
    }

    public function render()
    {
        return view('livewire.admin.create-category');
    }
}
