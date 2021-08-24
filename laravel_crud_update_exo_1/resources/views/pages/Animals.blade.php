@extends('template.index')



@section('content')
<table class="table">
  <thead>
    <tr>

      <th scope="col">genre</th>
      <th scope="col">age</th>
      <th scope="col">show</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($datas as $item )
          
      <tr>
        <th scope="row">{{$item->genre}}</th>
        <td>{{$item->age}}</td>
        <td><a href="{{route('show',$item->id)}}" class="btn btn-info">SHOW</a></td>
      </tr>
      @endforeach

  </tbody>
</table>
@endsection