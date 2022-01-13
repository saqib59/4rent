<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Homemesseges extends Component
{
    public function render()
    {
        return view('livewire.homemesseges');
    }
    public $empty_property;
    public function mount($empty_property)
    {
        $this->empty_property = $empty_property;

    }
}
