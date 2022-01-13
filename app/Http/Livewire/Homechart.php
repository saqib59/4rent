<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Homechart extends Component
{
    public function render()
    {
        return view('livewire.homechart');
    }
    public $notice,$income_ranges;
    public function mount($notice, $income_ranges)
    {
        $this->$notice = $notice;
        $this->income_ranges = $income_ranges;
    }
}
