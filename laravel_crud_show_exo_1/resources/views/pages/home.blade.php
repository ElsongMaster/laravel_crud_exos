@extends('template.index')


@section('content')
    
<h1>Bienvenue sur ma page home</h1>
<table class="table">
  <thead>
    <tr>

      <th scope="col">Nom</th>
      <th scope="col">quantite</th>
      <th scope="col">show</th>
      <th scope="col">delete</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($datas as $item )

      <tr>
        <th scope="row">{{$item->nom}}</th>
        <td>{{$item->quantite}}kg</td>
        <td><a href="{{route('show',$item->id)}}" class="btn btn-info">SHOW</a></td>
        <td><form action="{{route('delete',$item->id)}}" method="post">
            @csrf
            @method('DELETE')
        <button class="btn btn-danger text-light" type="submit">DELETE</button>
        </form></td>
      </tr>
@endforeach
   
  </tbody>
</table>

@endsection