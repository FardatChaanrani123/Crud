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
        <form class="form col-md-4 m-auto" action="{{route('client.update',$clEn->id)}}" method="POST">
            <h1 class="text-center bg-info">Formulaire Edit</h1>
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label class="control-label">
                    Nom
                </label>
                <input type="text" value="{{$clEn->nom}}" name="nom" placeholder="Entrer le nom" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <label class="control-label">
                    prenom
                </label>
                <input type="text" value="{{$clEn->prenom}}" name="prenom" placeholder="Entrer le prenom" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <label class="control-label">
                    Email
                </label>
                <input type="text" value="{{$clEn->mail}}" name="mail" placeholder="Entrer l'adresse mail" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <select name="ide" class="form-control">
                <option >Selectionner votre option</option>
                    @foreach($entreprises as $e)
                        <option value="{{$e->id}}" {{ ($clEn->Entreprise->nom == $e->nom) ? 'selected' : ''}} >{{$e->nom}}</option>
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