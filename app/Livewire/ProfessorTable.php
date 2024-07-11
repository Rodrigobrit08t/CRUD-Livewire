<?php

namespace App\Livewire;

use App\Livewire\Forms\ProfessorForm;
use App\Models\Professor;
use Livewire\Component;


class ProfessorTable extends Component
{
    public function render()
    {
        return view('livewire.professor-table', [
            'data' => Professor::get(),
        ]);
    }
}
