<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Homeinfocomponent extends Component
{
    public function render()
    {
        return view('livewire.homeinfocomponent');
    }
    public $property,$income,$tenant;
    public function mount($property,$income,$tenant)
    {
        $this->property = $property;
        $this->income = $income;
        $this->tenant = $tenant;
    }
}
