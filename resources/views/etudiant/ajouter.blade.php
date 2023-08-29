<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <div class="container ">
        <div class="row">
            <div class="cols6">
                <h1>AJOUTER UN ETUDIANT </h1>
                <hr>

                <!-- @if (session('status'))
                <div class="alert alert-sucess">
                    {{ session('status') }}
                </div>
                @endif -->

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="alert alert-danger"> {{ $error }} </li>
                    @endforeach
                </ul>

                <form action="/ajouter/traitement" method="POST" class="form-group">
                    @csrf
                    <div class="form-group">
                        <label for="Nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="Nom" name="nom">
                    </div>
                    <div class="form-group">
                        <label for="Prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="Prenom" name="prenom">
                    </div>
                    <div class="form-group">
                        <label for="Classe" class="form-label">Classe</label>
                        <input type="text" class="form-control" id="Classe" name="classe">
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary">Ajouter un etudiant</button>
                    <br> <br>

                    <a href="etudiant" class="btn btn-danger">Revenir a la liste des etudiants</a>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>