<?php

namespace App\Http\Livewire;

use App\Models\Tenant;
use Livewire\Component;

class TenantNotice extends Component
{
    public function render()
    {
        return view('livewire.tenant-notice');
    }

    public $tenant;

    public function mount(Tenant $tenant)
    {
        $this->post = $tenant;
    }
}
