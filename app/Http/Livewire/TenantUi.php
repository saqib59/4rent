<?php

namespace App\Http\Livewire;

use App\Models\Property;
use Livewire\Component;

class TenantUi extends Component
{
    public function render()
    {
        return view('livewire.tenant-ui');
    }
    public $property;
    public function mount($property)
    {
        $this->property = $property;
    }
}
