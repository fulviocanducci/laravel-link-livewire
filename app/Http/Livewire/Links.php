<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Links extends Component
{
    public $message;
    public function render()
    {
        return view('livewire.links');
    }
}
