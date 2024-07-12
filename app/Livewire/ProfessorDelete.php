<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\{Locked, On};

class ProfessorDelete extends Component
{
    #[Locked]
    public $id;

    #[Locked]
    public $name;    

    public $modalProfessorDelete = false;

    #[On('dispatch-professor-table-delete')]
    public function set_professor($id, $name){
        $this->id = $id;
        $this->name = $name;

        $this->modalProfessorDelete = true;
    }

    public function del(){
        $del = Professor::destroy($this->id);

        ($del)
        ? $this->dispatch('notify', title:'success', message:'Professor Excluido com Sucesso!')
        : $this->dispatch('notify', title:'failed', message:'Algo Deu Errado...');

        $this->modalProfessorDelete = false;

        $this->dispatch('dispatch-professor-delete-del')->to(ProfessorsTable::class);
    }

    public function render()
    {
        return view('livewire.professor-delete');
    }
}
