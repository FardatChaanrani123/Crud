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
        <form class="form col-md-4 m-auto" action="{{route('produit.update',$recuper->id)}}" method="POST">
            <h1 class="text-center">Formulaire de modification</h1>
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label class="control-label">
                    Libelle
                </label>
                <input type="text" value="{{$recuper->libelle}}" name="libelle" placeholder="Entrer le libelle" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <label class="control-label">
                    Prix
                </label>
                <input type="text" value="{{$recuper->prix}}" name="prix" placeholder="Entrer le prix" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <label class="control-label">
                    Quantite
                </label>
                <input type="text" value="{{$recuper->quantite}}" name="quantite" placeholder="Entrer la quantite" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <label class="control-label">
                    Description
                </label>
                <textarea name="description" class="form-control">{{$recuper->description}}</textarea>
            </div>
            <div class="mb-3">
                <button type="submit" name="envoyer" class="btn btn-success">
                    <i class="fa fa-check"></i>
                    Envoyer
                </button>
            </div>
        </form>
    </div>
</body>

</html>