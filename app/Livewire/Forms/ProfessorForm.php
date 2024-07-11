<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Attributes\Rule;
use Livewire\Form;
use App\Models\Professor;


class ProfessorForm extends Form
{
    public ?Professor $professor;

    #[Rule('required|min:3', as: 'Nome')]
    public $name;

    #[Rule('required|email', as: 'Email')]
    public $email;

    #[Rule('required|min:3', as: 'Endereço')]
    public $address;

    public function setProfessor(Professor $professor)
    {
        $this->professor = $professor;

        $this->name = $professor->name;
        $this->email = $professor->email;
        $this->address = $professor->address;
    }

    public function store(){
        Professor::create($this->except('professor'));
        $this->reset();
    }

    public function update(){
        $this->professor->update($this->except('professor'));
    }
}
