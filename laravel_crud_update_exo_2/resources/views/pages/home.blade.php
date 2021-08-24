@extends('template.index')


@section('content')
<a href="{{route('deleteAll')}}" class="btn btn-danger text-light">DELETE ALL MEMBERS</a>
<table class="table">
  <thead>
    <tr>

      <th scope="col">Nom</th>
      <th scope="col">Age</th>
      <th scope="col">Show</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datas as $item )
            <tr>
      <th scope="row">{{$item->nom}}</th>
      <td>{{$item->age}}</td>
      <td><a href="{{route('show',$item->id)}}" class="btn btn-info">SHOW</a></td>

    </tr>
    @endforeach


  </tbody>
</table>

@endsection