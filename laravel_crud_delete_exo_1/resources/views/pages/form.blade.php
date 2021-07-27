@extends('template.index')



@section('content')
<div class="container">

    <form action="{{route('store')}}" method="post">
  @csrf
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nom</label>
    <input type="text" class="form-control"name="nom"  id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">age</label>
    <input type="text" class="form-control"name="age"  id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">genre</label>
    <input type="text" class="form-control" name="genre" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection