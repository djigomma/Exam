<?php

namespace App\Http\Livewire\Etudiant;

use App\Models\Etudiant;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $prenom,$nom,$semestre_id,$matiere_id,$note,$exam;

    public function rule(){
        return[
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'semestre_id' => 'required|integer',
            'matiere_id' => 'required|integer',
            'note' => 'required|double',
            'exam' => 'required|double'
            
        ];
    }

    public function resetInput(){
        $this->prenom =NULL;
        $this->nom =NULL;
        $this->semestre_id =NULL;
        $this->matiere_id =NULL;
        $this->note =NULL;
        $this->exam =NULL;
    }

    public function storeEtudiant(){
        Etudiant::create([
            'prenom' => $this->prenom,
            'nom' => $this->nom,
            'semestre_id' => $this->semestre_id,
            'matiere_id' => $this->matiere_id,
            'note' => $this->note,
            'exam' => $this->exam,
        ]);
        session()->flash('message', "Etudiant ajouter avec succes !");
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function closeModal(){
        $this->resetInput();
    }

    public function openModal(){
        $this->resetInput();
    }
}
