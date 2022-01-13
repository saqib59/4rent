<?php

namespace App\Http\Livewire;

use App\Models\Tenant;
use Livewire\Component;

class TenantEdit extends Component
{
    public function render()
    {
        return view('livewire.tenant-edit');
    }
    public $tenant;

    public function mount(Tenant $tenant)
    {
        $this->post = $tenant;
    }
}
