<?php

namespace App\Livewire\Dashboard\Users;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component
{
    public $title;
    public User $user;
    public $name;
    public $email;
    public function mount(User $user)
    {
        $this->title = __('Edit user');
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
    }
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255', Rule::unique('users', 'name')->ignore($this->user?->id)],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($this->user?->id)],
        ];
    }
    public function updated($property)
    {
        $this->validateOnly($property);
    }
    public function save()
    {
        $validated = $this->validate();
        $save = $this->user->update($validated);
        if ($save) {
            session()->flash('status', __('User saved.'));
        } else {
            $this->addError('status', __('Save failed!'));
        }
    }
    public function render()
    {
        return view('livewire.dashboard.users.edit')->layout('layouts.app', [
            'title' => __('Edit user'),
        ]);
    }
}
