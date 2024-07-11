<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class ProfessorIndex extends Component
{
    #[Title('Professor')]
    public function render() : View
    {
        return view('livewire.professor-index');
    }
}
