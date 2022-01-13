<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ObjectList extends Component
{
    public function render()
    {
        return view('livewire.object-list');
    }

    public $property,$types;
    public function mount($property, $types)
    {
        $this->property = $property;
        $this->types = $types;
    }
}
