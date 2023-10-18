<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap5/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <h1>LISTE D'UN SEUL PRODUIT</h1>
        <div class="container shadow shadow-md">
            <p class="text-decoration-none fs-3">{{$data->libelle}}
            </p>
            <p>{{$data->prix}}</p>
            <p>{{$data->quantite}}</p>
            <p>{{$data->description}}</p>
            <div class="col-md-3">
                <a href="{{route('produit.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{route('produit.destroy',$data->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" name="supprimer" class="btn btn-danger offset-md-3">Delete</button>
                </form>
            </div>
        </div>
</body>
</html>