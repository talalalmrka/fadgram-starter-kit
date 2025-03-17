<?php

namespace App\Livewire\Site;

use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Design extends Component
{
    #[Title('Design')]
    #[Layout('layouts.app')]
    public $name = '';
    public $password = '';
    public $remember = false;
    public $agree = false;
    public $role_options = [];
    public $roles = [];
    public $permission_options = [];
    public $permissions = [];

    public $gender_options = [];
    public $gender = '';
    public $bio = '';
    public function mount()
    {
        $this->role_options = $this->role_options();
        $this->permission_options = $this->permission_options();
        $this->gender_options = $this->gender_options();

    }
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'remember' => ['boolean'],
            'agree' => ['required', 'accepted'],
            'roles' => ['required', 'array'],
            'roles.*' => ['nullable', Rule::in(array_values($this->role_option_values()))],
            'permissions' => ['required', 'array'],
            'permissions.*' => ['nullable', Rule::in(array_values($this->permission_option_values()))],
            'gender' => ['required', 'string', Rule::in(['m', 'f'])],
            'bio' => ['required', 'string', 'max:10000'],
        ];
    }
    public function role_option_values()
    {
        return Arr::map($this->role_options, function ($option) {
            return data_get($option, 'value');
        });
    }
    public function role_options()
    {
        return [
            [
                'label' => __('Admin'),
                'value' => 'admin',
            ],
            [
                'label' => __('Manager'),
                'value' => 'manager',
            ],
            [
                'label' => __('Seo Manager'),
                'value' => 'seo_manager',
            ],
            [
                'label' => __('Member'),
                'value' => 'member',
            ],
        ];
    }
    public function permission_option_values()
    {
        return Arr::map($this->permission_options, function ($option) {
            return data_get($option, 'value');
        });
    }
    public function permission_options()
    {
        return [
            [
                'label' => __('Manage users'),
                'value' => 'manage_users',
            ],
            [
                'label' => __('Manage roles'),
                'value' => 'manage_roles',
            ],
            [
                'label' => __('Manage permissions'),
                'value' => 'manage_permissions',
            ],
            [
                'label' => __('Manage posts'),
                'value' => 'manage_posts',
            ],
            [
                'label' => __('Manage settings'),
                'value' => 'manage_settings',
            ],

        ];
    }
    public function gender_options()
    {
        return [
            [
                'label' => __('Select gender'),
                'value' => '',
            ],
            [
                'label' => __('Male'),
                'value' => 'm',
            ],
            [
                'label' => __('Female'),
                'value' => 'f',
            ],

        ];
    }

    public function updated($property, $value)
    {
        $this->validateOnly($property);
    }
    public function updatedRoles($value)
    {
        $this->validateOnly('roles');
    }
    public function updatedPermissions($value)
    {
        $this->validateOnly('permissions');
    }
    public function save()
    {
        $validated = $this->validate();
        session()->flash('status', __('Data saved succcessfully.'));
        //dd($validated);

    }
    public function render()
    {
        return view('livewire.site.design');
    }
}
