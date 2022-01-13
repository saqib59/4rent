<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ObjectEdit extends Component
{
    public function render()
    {
        return view('livewire.object-edit');
    }
    public $property;
    public function mount(\App\Models\Property $property)
    {
        $this->property = $property;
    }
}
