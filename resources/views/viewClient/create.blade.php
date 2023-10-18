<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap5/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form class="form col-md-4 m-auto" action="{{route('client.store')}}" method="POST">
            <h1 class="text-center bg-info">Formulaire</h1>
            @csrf
            <div class="mb-3">
                <label class="control-label">
                    Nom
                </label>
                <input type="text" name="nom" placeholder="Entrer le nom" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <label class="control-label">
                    prenom
                </label>
                <input type="text" name="prenom" placeholder="Entrer le prenom" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <label class="control-label">
                    Email
                </label>
                <input type="text" name="mail" placeholder="Entrer l'adresse mail" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <select name="ide" class="form-control">
                <option >Selectionner votre option</option>
                    @foreach($entreprises as $e)
                        <option value="{{$e->id}}">{{$e->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" name="envoyer" class="btn btn-success">
                    Envoyer
                </button>
            </div>
        </form>
    </div>
</body>

</html>