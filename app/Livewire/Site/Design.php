<?php

namespace App\Livewire\Site;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Design extends Component
{
    #[Title('Design')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.site.design');
    }
}
