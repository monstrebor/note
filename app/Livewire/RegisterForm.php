<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class RegisterForm extends Component
{
    use WithFileUploads;

    #[Rule('required|min:3|max:50')]
    public $name;

    #[Rule('required|email|max:255|unique:users')]
    public $email;

    #[Rule('required|min:3')]
    public $password;

    #[Rule('sometimes|image|max:2048')]
    public $image;

    public function create()
    {
        $validated = $this->validate();
        if ($this->image) {
            $validated['image'] = $this->image->store('uploads', 'public');
        }

        User::create($validated);

        $this->reset('name', 'email', 'password');

        session()->flash('success', 'User Created!');
    }


    public function render()
    {
        return view('livewire.register-form');
    }
}
