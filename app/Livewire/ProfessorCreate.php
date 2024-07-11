<?php

namespace App\Livewire;

use App\Livewire\Forms\ProfessorForm;
use Livewire\Component;

class ProfessorCreate extends Component
{
    public ProfessorForm $form;

    public $modalProfessorCreate = false;

    public function save(){
        $this->validate();
        $save = $this->form->store();

        is_null($save)
        ? $this->dispatch('notify', title:'success', message:'')
        : $this->dispatch('notify', title:'failed', message:'');
    }

    public function render()
    {
        return view('livewire.professor-create');
    }
}
