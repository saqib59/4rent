<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TenantList extends Component
{
    public $tenants,$properties;
    public function render()
    {
        return view('livewire.tenant-list');
    }

    public function mount($tenants, $properties)
    {
        $this->tenants = $tenants;
        $this->properties = $properties;
    }
}
