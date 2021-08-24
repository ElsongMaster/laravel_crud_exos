@extends('template.index')


@section('content')
    <section class="container">
<div class="card" style="width: 18rem;">
  <img src="{{asset($ingredient->lien)}}" class="card-img-top" alt="...">
  <div class="card-body">
      <h3>{{$ingredient->id}}</h3>
    <p class="card-text">{{$ingredient->nom}}</p>

    <form action="{{route('delete',$ingredient->id)}}" method="post">
            @csrf
            @method('DELETE')
        <button class="btn btn-danger text-light" type="submit">DELETE</button>
    </form>
  </div>
</div>
    </section>
@endsection