<?php

namespace App\Livewire\Components;

use Livewire\Attributes\On;
use Livewire\Component;

class ReciverComponent extends Component
{
    public $clicks = 0;
    public $name = '';
    #[On('buttonClicked')]
    public function onButtonClicked()
    {
        $this->clicks++;
    }
    #[On('nameChanged')]
    public function onNameChanged($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.components.reciver-component');
    }
}
