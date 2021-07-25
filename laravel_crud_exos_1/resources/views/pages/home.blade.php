@extends('template.index')


@section('content')
<h1>Bienvenue sur ma page home</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">nom</th>
      <th scope="col">Type</th>
      <th scope="col">Niveau</th>
    </tr>
  </thead>
  <tbody>
@foreach ($datas as $pokemon )
    <tr>
      <th scope="row">{{$pokemon->id}}</th>
      <td>{{$pokemon->nom}}</td>
      <td>{{$pokemon->type}}</td>
      <td>{{$pokemon->niveau}}</td>
    </tr>
@endforeach
</tbody>
</table>
    
@endsection