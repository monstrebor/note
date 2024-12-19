<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithPagination;
    //do not add sensitive information in this public because it is visible in the frontend ex: public $name='nigga';

    //validation also
    #[Rule('required|min:2|max:50')]
    public $name;

    #[Rule('required|email|unique:users')]
    public $email;

    #[Rule('required|min:3')]
    public $password;

    public function createNewUser()
    {
        $validated = $this->validate();

        //validating
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        $this->reset(['name','email','password']);

        session()->flash('success','User created successfully.');
    }

    public function render()
    {
        $users = User::paginate(5);

        return view('livewire.clicker', [
            'users' => $users,
        ]);
    }
}
