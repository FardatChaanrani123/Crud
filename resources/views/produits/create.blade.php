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
        <form class="form col-md-4 m-auto" action="{{route('produit.store')}}" method="POST">
            <h1 class="text-center">Formulaire</h1>
            @csrf
            <div class="mb-3">
                <label class="control-label">
                    Libelle
                </label>
                <input type="text" name="libelle" placeholder="Entrer le libelle" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <label class="control-label">
                    Prix
                </label>
                <input type="text" name="prix" placeholder="Entrer le prix" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <label class="control-label">
                    Quantite
                </label>
                <input type="text" name="quantite" placeholder="Entrer la quantite" class="form-control input-lg">
            </div>
            <div class="mb-3">
                <label class="control-label">
                    Description
                </label>
                <textarea name="description" class="form-control"></textarea>
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