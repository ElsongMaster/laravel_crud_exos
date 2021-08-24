@extends('template.index')




@section('content')
    <div class="container d-flex justify-content-center">
<div class="card" style="width: 18rem;">
  <img src="{{asset($membre->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ID: {{$membre->id}}</h5>
    <h5 class="card-title">{{$membre->nom}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$membre->age}}</h6>
    <p class="card-text">{{$membre->genre}}</p>
    <div class="container d-flex justify-content-center">
        <form action="{{route('delete',$membre->id)}}" class="mx-2" method="post">
            @csrf
            @method('DELETE')
        <button type="submit" class="btn btn-danger text-light ">delete</button>
        </form>
        <a href="{{route('edit',$membre->id)}}" class="btn btn-info text-light">edit</a>

    </div>
    
  </div>
</div>
    </div>
@endsection