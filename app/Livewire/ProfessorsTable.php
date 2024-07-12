<?php

namespace App\Livewire;

use App\Livewire\Forms\ProfessorForm;
use App\Models\Professor;
use Livewire\Component;
use App\Traits\WithSorting;
use Livewire\WithPagination;

class ProfessorsTable extends Component
{
    use WithPagination;
    use WithSorting;

    public ProfessorForm $form;

    public 
        $paginate = 5,
        $sortBy = 'professors.id',
        $sortDirection = 'desc';

    #[On('dispatch-professor-create-save')]
    #[On('dispatch-professor-create-edit')]
    #[On('dispatch-professor-delete-del')]
    public function render()
    {
        
        return view('livewire.professors-table', [
            'data'=>Professor::where('id', 'like', '%' . $this->form->id . '%')
            ->where('name', 'like', '%' . $this->form->name . '%')
            ->where('email', 'like', '%' . $this->form->email . '%')
            ->where('address', 'like', '%' . $this->form->address . '%')
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->paginate),
        ]); 
    }
}
