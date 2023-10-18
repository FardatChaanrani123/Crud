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
    <table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th>id</th>
      <th>nom</th>
      <th>prenom</th>
      <th>mail</th>
      <th>Nom_E</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($client as $cl)
    <tr>
      <td>{{$cl->id}}</td>
      <td>{{$cl->nom}}</td>
      <td>{{$cl->prenom}}</td>
      <td>{{$cl->mail}}</td>
      <td>{{$cl->Entreprise->nom}}</td>
      <td><a href="{{route('client.edit',$cl->id)}}" class="btn btn-info">Edit</a></td>
      <td><a href="{{route('client.destroy',$cl->id)}}" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</body>
</html>