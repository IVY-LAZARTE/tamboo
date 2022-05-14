<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

use Livewire\WithPagination;

class UserComponent extends Component
{

    use WithPagination;

    public $search;

    protected $listeners = ['delete'];


    public function updatingSearch(){
        $this->resetPage();
    }

    public function assignRole(User $user, $value){

       if ($user->category) {
            if ($value == '1') {
                $user->assignRole('productor');
            }else{
                $user->removeRole('productor');
            }
        }else{
            $this->emit('error','El usuario debe estar relacionado a una empresa');
            return redirect()->route('admin.users.index');
        }

    }

     public function delete(User $user){
        $user->delete();
    }
    
    public function render()
    {

        $users = User::where('email', '<>', auth()->user()->email)
                    ->where(function($query){
                        $query->where('name', 'LIKE', '%' . $this->search . '%');
                        $query->orWhere('email', 'LIKE', '%' . $this->search . '%');
                    })->paginate();

        return view('livewire.admin.user-component', compact('users'))->layout('layouts.admin');
    }

   
}
