<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('etudiant.modal-form')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Cree un Etudiant</h2>
                        <h4>
                            <a href="#" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#addEtudiantModal">
                                Ajouter un Etudiant
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <br> <br>
                        <div class="table-responsive">
                           <form action="">
                                <div class="md-3">
                                    <label for="">Prenom</label>
                                    <input type="text"class="form-control col-md-8">
                                </div>
                                <div class="md-3">
                                    <label for="">Nom</label>
                                    <input type="text"class="form-control col-md-8">
                                </div>
                                <div class="md-3">
                                    <label for="">Semestre</label>
                                   
                                    <select name="" id="">
                                        @foreach($semestres as $semestre)
                                        <option value="">{{ $semestre->nom}}</option>
                                        @endforeach
                                    </select>
                                   
                                </div>
                                <div class="md-3">
                                    <label for="">Matiere</label>
                                    <select name="" id="">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="md-3">
                                    <label for="">Note 1</label>
                                    <input type="text"class="form-control col-md-8">
                                </div>
                                <div class="md-3">
                                    <label for="">Exam</label>
                                    <input type="text"class="form-control col-md-8">
                                </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>    