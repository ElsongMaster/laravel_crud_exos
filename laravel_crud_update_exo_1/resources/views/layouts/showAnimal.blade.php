@extends('template.index')



@section('content')
    <section class="container d-flex justify-content-center">

    <div class="card my-5" style="width: 18rem;">
  <div class="card-body  ">
      <h5 class="card-title text-center">ID: {{$animal->id}}</h5>
    <h5 class="card-title text-center">{{$animal->genre}}</h5>
    <h6 class="card-subtitle mb-2 text-muted text-center">{{$animal->age}}</h6>
    <div class="container d-flex justify-content-center w-100">

        <form action="{{route('delete',$animal->id)}}" class="mx-1" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger text-light">delete</button>
        </form>
        <a href="{{route('edit',$animal->id)}}" class="btn btn-info text-light">edit</a>
    </div>
  </div>
</div>
    </section>
@endsection