<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PropertyDetails extends Component
{
    public function render()
    {
        return view('livewire.property-details');
    }

    public $property;

    public function mount(\App\Models\Property $property)
    {
        $this->property = $property;
    }
}
