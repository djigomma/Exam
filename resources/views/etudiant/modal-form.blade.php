<div wire:ignore.self class="modal fade" id="addEtudiantModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un Etudiant</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent action="{{ route('ajout')}}" method="POST">
            <div class="modal-body">
                <div class="md-3 p-2">
                    <input type="text" class="form-control" placeholder="Prenom" name="prenom">
                </div>
                <div class="md-3 p-2">
                    <input type="text" class="form-control" placeholder="Nom" name="nom">
                </div>
                <div class="md-3 p-2">
                    
                    <select name="semestre_id" class="form-control">
                        @foreach($semestres as $semestre)
                        <option value="{{ $semestre->id}}">{{ $semestre->nom}}</option>
                        @endforeach
                    </select>
                    
                </div>
                <div class="md-3 p-2">
                    
                    <select name="matiere_id" class="form-control">
                        @foreach($matieres as $matiere)
                        <option value="{{ $semestre->id}}">{{ $matiere->nom}}</option>
                        @endforeach
                    </select>
                    
                </div>
                <div class="md-3 p-2">
                    <input type="text" class="form-control" placeholder="Note 1" name="note">
                </div>
                <div class="md-3 p-2">
                    <input type="text" class="form-control" placeholder="Exam" name="exam">
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