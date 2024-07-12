<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\ProfessorForm;
use App\Livewire\ProfessorsTable;

class ProfessorEdit extends Component
{

    public ProfessorForm $form;

    public $modalProfessorEdit = false;

    #[On('dispatch-professor-table-edit')]
    public function set_professor(Professor $id){
        $this->form->setProfessor($id);
        $this->modalProfessorEdit = true;
    }

    public function edit(){
        $this->validate();
        $update = $this->form->update();

        is_null($update)
        ? $this->dispatch('notify', title:'success', message:'Professor Editado com Sucesso!')
        : $this->dispatch('notify', title:'failed', message:'Algo Deu Errado...');
        
        $this->dispatch('dispatch-professor-create-edit')->to(ProfessorsTable::class);
    }

    public function render()
    {
        return view('livewire.professor-edit');
    }
}
