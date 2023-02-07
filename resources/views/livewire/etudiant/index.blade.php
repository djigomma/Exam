@include('livewire.etudiant.modal-form')
<div class="container">
    <div class="row" style="margin:20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Devoir N:2 ISI L3GL</h2>
                    <h4>
                        <a href="#" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#addEtudiantModal">
                            Ajouter un Etudiant
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <br> <br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>N</th>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Matiere</th>
                                    <th>Note 1</th>
                                    <th>Examan</th>
                                    <th>Semestre</th>
                                </tr>
                            </thead>
                            <?php
                                $s = 0;
                                $ge = 0;
                                $premier = $etudiants[0];
                            ?>
                            <tbody>
                                @foreach($etudiants as $etudiant)
                                    <tr>
                                        <td>{{ $etudiant->id}}</td>
                                        <td>{{ $etudiant->prenom}}</td>
                                        <td>{{ $etudiant->nom}}</td>
                                        <td>
                                            @if($etudiant->matiere)
                                                {{ $etudiant->matiere->nom}}
                                            @endif
                                        </td>
                                        <td>{{ $etudiant->note}}</td>
                                        <td>{{ $etudiant->exam}}</td>
                                        <td>
                                            @if($etudiant->semestre)
                                                {{ $etudiant->semestre->nom}}
                                            @endif
                                        </td>
                                    </tr>
                                    <?php
                                        $m =  (($etudiant->note + $etudiant->exam) /2);
                                        $s = $s + $m;
                                        $ge = $ge +1;
                                        if($m >($premier->note+ $premier->exam)/ 2){
                                            $premier = $etudiant;
                                        }
                                    ?>
                              @endforeach
                            </tbody>
                        </table>
                        <span>
                          
                            <h4>La Moyenne Generale de la classe est de : {{ $s / $ge }} / 20</h4>
                            <h4>Le nom de l'etudiant 1er est : {{ $premier->prenom }} {{ $premier->nom }}</h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
<script>
    window.addEventListener('close-modal', event =>{
        $('#addEtudiantModal').modal('hide');
    }) 
</script>
@endpush
