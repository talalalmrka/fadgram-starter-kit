<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class EventsPage extends Component
{
    #[Title('Design')]
    #[Layout('layouts.app')]
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
        return view('livewire.events-page');
    }
}
