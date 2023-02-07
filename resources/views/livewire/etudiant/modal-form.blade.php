<div wire:ignore.self class="modal fade" id="addEtudiantModal" tabindex="-1" aria-labelledby="addEtudiantModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addEtudiantModalLabel">Ajouter un Etudiant</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="storeEtudiant">
            <div class="modal-body">
                <div class="md-3 p-2">
                    <input type="text" class="form-control" placeholder="Prenom" wire:modal.defer="prenom">
                </div>
                <div class="md-3 p-2">
                    <input type="text" class="form-control" placeholder="Nom" wire:modal.defer="nom">
                </div>
                <div class="md-3 p-2">
                    
                    <select  class="form-control">
                        @foreach($semestres as $semestre)
                        <option value="{{ $semestre->id}}" wire:modal.defer="semestre_id">{{ $semestre->nom}}</option>
                        @endforeach
                    </select>
                    
                </div>
                <div class="md-3 p-2">
                    
                    <select  class="form-control">
                        @foreach($matieres as $matiere)
                        <option value="{{ $semestre->id}}" wire:modal.defer="matiere_id">{{ $matiere->nom}}</option>
                        @endforeach
                    </select>
                    
                </div>
                <div class="md-3 p-2">
                    <input type="number" class="form-control" placeholder="Note 1" wire:modal.defer="note">
                </div>
                <div class="md-3 p-2">
                    <input type="number" class="form-control" placeholder="Exam" wire:modal.defer="exam">
                </div>
            </div> 
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-primary">Enregister</button>
            </div>
        
        </form>   
      </div>
    </div>
  </div>