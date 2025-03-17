<?php

namespace App\Livewire\Components;

use Livewire\Component;

class SenderComponent extends Component
{
    public $name = '';

    public function sendEvent()
    {
        $this->dispatch('buttonClicked');
    }

    public function updatedName()
    {
        $this->dispatch('nameChanged', $this->name);
    }
    public function render()
    {
        return view('livewire.components.sender-component');
    }
}
