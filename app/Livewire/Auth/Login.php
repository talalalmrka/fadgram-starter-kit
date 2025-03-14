<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember = false;
    public function rules()
    {
        return [
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'remember' => ['boolean'],
        ];
    }
    public function updated($property, $value)
    {
        $this->validateOnly($property);
    }
    public function authenticate()
    {
        $validated = $this->validate();
        dd($validated);
    }
    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.auth');
    }
}
