
@extends('template.index')



@section('content')
    
<div class="container">

    <form action="{{route('store')}} " method="POST">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">marque</label>
        <input type="text" name= "marque" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">année</label>
        <input type="number" name= "annee" class="form-control" id="exampleInputPassword1">
      </div>
    
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">couleur</label>
        <input type="text" name= "couleur" class="form-control" id="exampleInputPassword1">
      </div>
    
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">prix</label>
        <input type="number" name= "prix" class="form-control" id="exampleInputPassword1">
      </div>
    
    
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">réduction</label>
        <input type="number" name= "reduction" class="form-control" id="exampleInputPassword1">
      </div>
    
    
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection