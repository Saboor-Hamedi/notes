<?php

namespace App\Livewire;

use Livewire\Component;

class Droppdown extends Component
{

    public $selectedAction;
    public function action($action)
    {
        $this->selectedAction = $action;
    }

    public function render()
    {
        return view('livewire.dropdown');
    }
}
