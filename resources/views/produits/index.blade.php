<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap5/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <h1>LISTE DES PRODUITS</h1>
    @foreach($listprod as $prod)
        <div class="container shadow shadow-md">
            <p><a class="text-decoration-none fs-3" href="{{route('produit.show',$prod->id)}}">{{$prod->libelle}}</a>
            </p>
            <p>{{$prod->prix}}</p>
            <p>{{$prod->quantite}}</p>
            <p>{{$prod->description}}</p>
        </div>
        @endforeach
</body>
</html>