@extends('template.index')

@section('content')
    
<form action="/store" class="d-flex flex-column">
<div class="form-line"><label for="">nom</label><input type="text" name="nom"></div>
<div class="form-line"><label for="">genre</label><input type="text" name="genre"></div>
<div class="form-line"><label for="">email</label><input type="text" name="email"></div>
<div class="form-line"><label for="">age</label><input type="text" name="age"></div>
<button type="submit">submit</button>
</form>
@endsection